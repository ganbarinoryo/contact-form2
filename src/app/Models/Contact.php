<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //contentsテーブルのカラムで、操作可能とするものを指定する
    //以下の記述では、name, email, tel, contentが操作可能になる
    protected $fillable = [
        'name',
        'email',
        'tel',
        'content',
    ];
}
