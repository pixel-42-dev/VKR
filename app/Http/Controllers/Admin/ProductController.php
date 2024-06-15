<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories', 'brands'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("image{$i}")) {
                $path = $request->file("image{$i}")->store('product-images', 'public');
                $params["image{$i}"] = $path;
            }
        }

        Product::create($params);
        return redirect()->route('products.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin/products/create', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $params = $request->except(['_token', '_method']);

        // Обновление основных данных товара
        $product->update($params);

        // Загрузка и обновление изображений
        if ($request->hasFile('image1')) {
            $path = $request->file('image1')->store('product-images', 'public');
            $product->image1 = $path;
        }
        if ($request->hasFile('image2')) {
            $path = $request->file('image2')->store('product-images', 'public');
            $product->image2 = $path;
        }
        if ($request->hasFile('image3')) {
            $path = $request->file('image3')->store('product-images', 'public');
            $product->image3 = $path;
        }

        // Сохранение изменений
        $product->save();

        return redirect()->route('products.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
