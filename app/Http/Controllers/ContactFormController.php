<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactForm::select('id', 'name', 'title', 'created_at')->get();
        return view('contacts.index', compact('contacts')); //viewへ渡す
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request, $request->name);
        
        ContactForm::create([ // model ContactForm
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'contact' => $request->contact,
        ]);
        
        return to_route('contacts.index'); //フォルダ名/ファイル名
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);
        
        // 性別
        if($contact->gender === 0) {
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        
        // 年齢
        $age = ''; // $age変数を初期化
        if ($contact->age === 1) {
            $age = '〜19歳';
        }
        if ($contact->age === 2) {
            $age = '20歳〜29歳';
        }
        if ($contact->age === 3) {
            $age = '30歳〜39歳';
        }
        if ($contact->age === 4) {
            $age = '40歳〜49歳';
        }
        if ($contact->age === 5) {
            $age = '50歳〜59歳';
        }
        if ($contact->age === 6) {
            $age = '60歳〜';
        }
        if ($contact->age === 7) {
            $age = '年齢不明';
        }
        
        return view('contacts.show', compact('contact', 'gender','age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);
        
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = ContactForm::find($id);
        
        $contact->name = $request->name; // フォーム→dbに上書き
        $contact->title = $request->title; // フォーム→dbに上書き
        $contact->email = $request->email; // フォーム→dbに上書き
        $contact->url = $request->url; // フォーム→dbに上書き
        $contact->gender = $request->gender; // フォーム→dbに上書き
        $contact->age = $request->age; // フォーム→dbに上書き
        $contact->contact = $request->contact; // フォーム→dbに上書き
        $contact->save();
        
        return to_route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
