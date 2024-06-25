<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('nickname', 'password');

        if (Auth::attempt(['nickname' => $credentials['nickname'], 'password' => $credentials['password']])) {
            $user = Auth::user(); // Получаем текущего пользователя

            // Сохраняем сообщение в сессии
            $request->session()->flash('success', 'Вы вошли как ' . $user->nickname);

            return redirect()->route('index');
        }

        return back()->with('error', 'Неверный логин или пароль.');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|unique:users|min:6|max:16',
            'email' => 'required|string|unique:users|email|max:64',
            'password' => 'required|string|min:8|max:16|confirmed|regex:/^(?=.*\d)/',
            'terms' => 'accepted',
        ]);

        $user = User::create([
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('settings', ['page' => 3]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nickname' => 'required|string|min:6|max:16',
            'name' => 'required|string|min:2|max:16',
            'surname' => 'required|string|min:2|max:16',
            'email' => 'required|string|email|max:64',
            'phone' => 'required|string|min:6|max:64',
            'address' => 'required|string|max:64',
        ]);

        $user = Auth::user();

        $user->nickname = $validatedData['nickname'];
        $user->name = $validatedData['name'];
        $user->surname = $validatedData['surname'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->save();

        return redirect()->route('settings', ['page' => 3])->with('success', 'Изменения сохранены успешно.');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|max:16|confirmed|regex:/^(?=.*\d)/',
        ]);

        $user = Auth::user();

        // Проверка текущего пароля
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('settings', ['page' => 4])->withInput()->withErrors(['current_password' => 'Текущий пароль указан неверно.']);
        }

        // Обновление пароля
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('settings', ['page' => 4])->with('success', 'Пароль успешно изменён.');
    }


}
