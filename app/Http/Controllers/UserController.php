<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index')->with([
            'test_1' => 'Hello',
            'test_2' => 'World!',
        ]);
    }

    public function confirm()
    {
        return view('user.confirm')->with([
            'test_1' => 'Hello',
            'test_2' => 'World!',
        ]);
    }
}
