<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Peminjaman;

class AdminController extends Controller
{
    //
    public function index()
    {
        $ruangans = Ruangan::all();
        return view('admin/admin', compact('ruangans'));
    }

    public function create()
    {
        return view('admin/create');
    }

    public function pengajuan()
    {
        // $peminjamen = Peminjaman::all();
        // return view('admin/pengajuanpinjam', compact('peminjamen'));

        // return view('admin/pengajuan');

        // $peminjamen = Peminjaman::all();

        $peminjaman = Peminjaman::where('status', 0)->get();
        return view('admin/pengajuan', ['peminjaman' => $peminjaman]);
    }
}
