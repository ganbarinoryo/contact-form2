<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //名前、入力必須、文字列型、最大２５５文字まで
            'name' => ['required', 'string', 'max:255'],
            //メール、入寮必須、文字列型、メール形式、最大２２５文字まで
            'email' => ['required', 'string','email', 'max:255'],
            //電話番号、入力必須、数値型、１０〜１１桁の整数
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            //お問い合わせ内容の部分は指定なし
        ];
    }

    //エラーメッセージ文の設定
    //キー名.ルール => メッセージ
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
        ];
    }
}
