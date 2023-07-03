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
        $values = Test::all(); // 全件（エロクアント）
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::where('text', '=', 'bbb')->get();
        dd($values, $count, $first, $whereBBB);
        // ddd($values, $count, $first, $whereBBB);
        return view('tests.test', compact('values')); // フォルダ/ファイル名
    }
}
