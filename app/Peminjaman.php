<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    //
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function peminjaman_detail()
    {
        return $this->hasMany('App\Peminjaman_detail', 'peminjaman_id', 'id');
    }
}
