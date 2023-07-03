<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // ②コントローラー
    public function index()
    {
        return view('tests.test');
    }
}
