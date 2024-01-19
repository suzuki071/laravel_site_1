<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index')->with([
            'test_1' => 'Hello, World!',
            'test_2' => 'index',
        ]);
    }

    public function confirm()
    {
        return view('user.confirm')->with([
            'test_1' => 'Hello, World!',
            'test_2' => 'confirm',
        ]);
    }
}
