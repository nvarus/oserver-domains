<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postSignin(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->has('remember')))
        {
            var_dump($request);
            echo 'Не правильный логин или пароль';
        } else echo "Вы успешно авторизованы";
    }
}
