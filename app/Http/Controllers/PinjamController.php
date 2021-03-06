<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Ruangan;
use App\Peminjaman;
// use App\Pesanan_detail;
use Auth;
use Carbon\Carbon;
use App\User;
use Alert;
use Dotenv\Regex\Success;

// use SweetAlert;

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

    public function info($id)
    {
        // $ruangan = Ruangan::where('id', $id)->First();
        // return view('pinjam/info', compact('ruangan'));

        // $ruangan = Ruangan::where('id', $id)->First();

        // $ruangan_nama = Ruangan::where([
        //     ['id', $ruangan],
        //     ['ruangan_nama', $ruangan],
        // ])->get();

        // $peminjaman = Peminjaman::where([
        //     ['status', 1],
        //     ['ruangan_id', $ruangan_nama],
        // ])->get();

        $ruangan = Ruangan::where('id', $id)->First();

        $peminjaman = Peminjaman::where([
            ['status', 1],
            ['ruangan_id', $id]
        ])->get();

        return view('pinjam/info', compact('ruangan'), ['peminjaman' => $peminjaman]);
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


        //validasi apakah nim/nip dan nomor hp sudah diisi
        $user = User::where('id', Auth::user()->id)->First();

        if (empty($user->nomorinduk)) {
            session()->flash('notif', 'Lengkapi Profil Terlebih Dahulu !');
            return redirect('profile');
        }
        if (empty($user->nomorhp)) {
            session()->flash('notif', 'Lengkapi Profil Terlebih Dahulu !');
            return redirect('profile');
        }

        // versi 2
        $ruangan = Ruangan::where('id', $id)->First();
        $tanggal = Carbon::now();

        $peminjaman = new Peminjaman;
        $peminjaman->user_id = Auth::user()->id;
        $peminjaman->user_nama = Auth::user()->name;
        $peminjaman->user_nomorinduk = Auth::user()->nomorinduk;
        $peminjaman->user_nomorhp = Auth::user()->nomorhp;
        $peminjaman->ruangan_id  = $ruangan->id;
        $peminjaman->ruangan_nama = $ruangan->nama_ruangan;
        $peminjaman->tanggal = $tanggal;
        $peminjaman->tanggal_dipinjam = $request->tanggal_dipinjam;
        $peminjaman->waktu_pakai = $request->waktu_pakai;
        $peminjaman->waktu_selesai = $request->waktu_selesai;
        $peminjaman->status = 0;
        $peminjaman->save();

        // Alert::success('Terkirim', 'Berhasil');
        // return back()->with('success', 'Success Message');
        // swal("Oops!", "Something went wrong!", "error");

        session()->flash('notif', 'Pengajuan Peminjaman Berhasil. Tunggu Persetujuan Petugas !');
        return redirect('home');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        //return $employee;
        Peminjaman::destroy($peminjaman->id);
        session()->flash('notif', 'Data Berhasil Dihapus !');
        return redirect('/admin/pengajuan');
    }

    // public function approve(Request $request, Peminjaman $peminjaman)
    public function approve(Peminjaman $peminjaman)
    {

        // $nama_file = $ruangan->gambar;

        Peminjaman::where('id', $peminjaman->id)
            ->update([
                'status' => 1,
            ]);

        session()->flash('notif', 'Peminjaman Berhasil Disetujui !');
        return redirect('/admin/pengajuan');
    }
    public function disapprove(Peminjaman $peminjaman)
    {

        // $nama_file = $ruangan->gambar;

        Peminjaman::where('id', $peminjaman->id)
            ->update([
                'status' => 0,
            ]);

        session()->flash('notif', 'Peminjaman Berhasil Dibatalkan !');
        return redirect('/admin/persetujuan');
    }


    //
}
