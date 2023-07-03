<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読み込み
use App\Models\Test;

class TestController extends Controller
{
    // ②コントローラー
    public function index()
    {
        $values = Test::all(); // 全件
        // dd($values);
        return view('tests.test', compact('values')); // フォルダ/ファイル名
    }
}
