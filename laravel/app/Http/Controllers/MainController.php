<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class MainController extends Controller
{
    public function login() {
        return view('login');
    }

    public function homepage() {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }

    public function form() {
        return view('form');
    }

    #[NoReturn] public function form_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:5|max:100',
            'heading' => 'required|min:10|max:100',
            'message' => 'required|min:20|max:500',
        ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->heading = $request->input('heading');
        $review->message = $request->input('message');

        $review->save();

//        return redirect()->route('form');

    }
}
