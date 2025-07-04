<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //DBから情報を取得 モデル名::select(カラム名)->get()でDBから指定したカラムをすべて取得
        $contacts = ContactForm::select('id','name','title','gender','created_at')->get();

        //contactsフォルダ内のindex.blede.phpを返す
        //viewメソッドの第２引数で変数を指定するとレビュー側に変数を渡すことができる
        //compactでまとめて渡せる

        return view('contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //DBに以下の情報をまとめて登録する処理
        ContactForm::create([
            'name' => $request->name, 
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'contact' => $request->contact
        ]);
        //indexページにリダイレクト
        return to_route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $contact = ContactForm::findOrFail($id);

        if($contact ->gender===0){
            $gender = '男性';
        }else{
            $gender = '女性';
        }

        return view('contacts.show',compact('contact','gender'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $contact = ContactForm::findOrFail($id);

        if($contact ->gender===0){
            $gender = '男性';
        }else{
            $gender = '女性';
        }

        return view('contacts.edit',compact('contact','gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         //DBに以下の情報をまとめて登録する処理
        $before_contact = ContactForm::findOrFail($id);

            $before_contact->name = $request->name;
            $before_contact->title = $request->title;
            $before_contact->email = $request->email;
            $before_contact->url = $request->url;
            $before_contact->gender = $request->gender;
            $before_contact->age = $request->age;
            $before_contact->contact = $request->contact;
            $before_contact->save();
        //indexページにリダイレクト
        return to_route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
