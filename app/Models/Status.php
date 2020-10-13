<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{   //设置为可更新的模式
    protected $fillable = ['content'];

    //将文章与用户相互关联
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
