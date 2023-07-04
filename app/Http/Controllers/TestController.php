<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読み込み
use App\Models\Test;
// クエリビルダ(sqlみたいなもの)
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    // ②コントローラー
    public function index()
    {
        // 全件（エロクアント） ※クエリビルダより主流
        $values = Test::all(); // モデル名::メソッド
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::where('text', '=', 'bbb')->get();
        
        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'aaa')
        ->select('id', 'text')
        ->get(); // get型でとれる
        
        dd($values, $count, $first, $whereBBB, $queryBuilder);
        // ddd($values, $count, $first, $whereBBB);
        return view('tests.test', compact('values')); // フォルダ/ファイル名
    }
}
