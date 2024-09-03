<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //アクション名index、index.blade.php(フォーム入力ページ)を呼び出す
    public function index()
    {
        return view('index');
    }

    //入力画面の送信ボタンクリック時に行われる処理の記述
    public function confirm(ContactRequest $request)
    {
       //値を取り出す処理の記述( $request->only(['キー', 'キー']); )
       //「キー」には、view ファイル内 inputタグ の name 属性で指定した文字を記述
        $contact = $request->only(['name', 'email', 'tel', 'content']);
       return view('confirm', compact('contact'));
    }

    //確認画面の送信ボタンクリック時に行われる処理の記述
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        //Contactモデルを使ったデータの保存処理のコードの記述
        Contact::create($contact);
        //お問い合わせ確認画面の送信ボタンを押してthanksページを表示させる記述
            return view('thanks');
    }
}
