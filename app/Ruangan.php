<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    // protected $table = 'gambar';

    protected $fillable = ['nama_ruangan', 'kapasitas', 'keterangan', 'gambar'];
    // protected $fillable = ['nama_ruangan', 'kapasitas', 'keterangan'];

    public function peminjaman_detail()
    {
        return $this->hasMany('App\Peminjaman_detail', 'ruangan_id', 'id');
    }
    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'ruangan_id', 'id');
    }
}
