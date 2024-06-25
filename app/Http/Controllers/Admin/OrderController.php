<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Size;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin/orders/create', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $params = $request->validate([
            'status' => 'required|integer|in:1,2,3,4',
        ]);

        $order->update($params);

        return redirect()->route('admin', ['page' => 'new'])->with('success', 'Заказ успешно обновлен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $orderID = $order->id;

        // Получаем список продуктов и их размеров по orderID
        $orderProducts = \App\OrderProduct::where('orderID', $orderID)->get();

        // Список продуктов и их размеров в $orderProducts
        foreach ($orderProducts as $orderProduct) {
            $productID = $orderProduct->productID;
            $size = $orderProduct->size;

            // Логика по увеличению количества продуктов в таблице sizes
            $sizeRecord = Size::where('clothes_id', $productID)
                ->where('clothes_size', $size)
                ->first();

            if ($sizeRecord) {
                $sizeRecord->count++;
                $sizeRecord->save();
            }
        }

        // Удаляем заказ
        $order->delete();

        return redirect()->route('admin', ['page' => 'new'])->with('success', 'Заказ успешно отменён.');
    }

}
