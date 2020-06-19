<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function peminjaman_detail()
    {
        return $this->hasMany('App\Peminjaman_detail', 'peminjaman_id', 'id');
    }
}
