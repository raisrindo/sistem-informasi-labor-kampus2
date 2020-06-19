<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    public function peminjaman_detail()
    {
        return $this->hasMany('App\Peminjaman_detail', 'ruangan_id', 'id');
    }
}
