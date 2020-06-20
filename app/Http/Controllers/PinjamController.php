<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Peminjaman;
// use App\Pesanan_detail;
use Auth;
use Carbon\Carbon;

class PinjamController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $ruangan = Ruangan::where('id', $id)->First();

        return view('pinjam/index', compact('ruangan'));
    }
    public function pinjam(Request $request, $id)
    {

        // versi 1
        // //memasukkan data ke database peminjaman
        // // dd($request);
        // $ruangan = Ruangan::where('id', $id)->First();
        // $tanggal = Carbon::now();

        // $peminjaman = new Peminjaman;
        // $peminjaman->user_id = Auth::user()->id;
        // $peminjaman->tanggal = $tanggal;
        // $peminjaman->tanggal_dipinjam = $request->tanggal_dipinjam;
        // $peminjaman->waktu_pakai = $request->waktu_pakai;
        // $peminjaman->waktu_selesai = $request->waktu_selesai;
        // $peminjaman->status = 0;
        // $peminjaman->save();

        // //memasukkan data ke database detail peminjaman

        // $peminjaman_detail = new Peminjaman_detail;
        // $peminjaman_detail->ruangan_id = $ruangan->id;
        // $peminjaman_detail->ruangan_nama = $ruangan->nama_ruangan;
        // $peminjaman_detail->user_id  = Auth::user()->id;


        // versi 2
        $ruangan = Ruangan::where('id', $id)->First();
        $tanggal = Carbon::now();

        $peminjaman = new Peminjaman;
        $peminjaman->user_id = Auth::user()->id;
        $peminjaman->user_nama = Auth::user()->name;
        $peminjaman->ruangan_id  = $ruangan->id;
        $peminjaman->ruangan_nama = $ruangan->nama_ruangan;
        $peminjaman->tanggal = $tanggal;
        $peminjaman->tanggal_dipinjam = $request->tanggal_dipinjam;
        $peminjaman->waktu_pakai = $request->waktu_pakai;
        $peminjaman->waktu_selesai = $request->waktu_selesai;
        $peminjaman->status = 0;
        $peminjaman->save();

        return redirect('home');
    }
}
