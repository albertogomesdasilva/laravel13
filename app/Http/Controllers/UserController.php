<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        dd("Olá, seja bem-vindo ao curso de Laravel 13 !");

    //    return view('user');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        return redirect()->route('users.index');
    }

}
