<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    // 指定自訂的資料表
    // Laravel 自動會給資料表加上s，所以預先設定好
    protected $table = 'blog';

    // 預設主鍵id名稱 (你資料表裡面的id)
    protected $primaryKey = 'id';

    // 不要自動增加創建、更新時間
    public $timestamps = false;

    // protected $connection = 'name';
}
