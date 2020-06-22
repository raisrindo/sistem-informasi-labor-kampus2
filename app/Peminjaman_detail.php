<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman_detail extends Model
{
    //
    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'ruangan_id', 'id');
    }
    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman', 'ruangan_id', 'id');
    }
}
