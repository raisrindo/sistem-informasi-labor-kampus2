<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;


class RuanganController extends Controller
{
    //
    // public function index()
    // {
    //     $ruangans = Ruangan::all();
    // }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama_ruangan' => 'required',
        //     'kapasitas' => 'required',
        //     'keterangan' => 'required',
        //     // 'gambar' => 'required|image|mimes:jpeg,png,jpg',
        // ]);
        $request->validate([
            'nama_ruangan' => 'required',
            'kapasitas' => 'required',
            'keterangan' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        // $nama_file = $request->file('file')->getClientOriginalName();

        // // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'uploads';
        $file->move($tujuan_upload, $nama_file);
        // $request->file('file')->move('uploads', $nama_file);

        Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'kapasitas' => $request->kapasitas,
            'keterangan' => $request->keterangan,
            'gambar' =>  $nama_file
        ]);

        // $ruangan = new Ruangan;
        // $ruangan->nama_ruangan =$request->nama_ruangan;
        // $ruangan->kapasitas =$request->kapasitas;
        // $ruangan->keterangan =$request->keterangan;
        // $ruangan->gambar =$request->file('file')->getClientOriginalName();

        // $ruangan->save();


        // // menyimpan data gambar yang diupload ke variabel $gambar
        // $gambar = $request->file('gambar');

        // $nama_gambar = time() . "_" . $gambar->getClientOriginalName();

        // // mengisi nama folder tempat kemana file diupload
        // $tujuan_upload = 'uploads';
        // $gambar->move($tujuan_upload, $nama_gambar);

        // Employee::create([
        //     'nama_ruangan' => $request->nama_ruangan,
        //     'kapasitas' => $request->kapasitas,
        //     'keterangan' => $request->keterangan,
        //     'gambar' => $nama_gambar,
        // ]);

        // $resorce       = $request->file('gambar');
        // $name   = $resorce->getClientOriginalName();
        // $resorce->move(\base_path(). "/public/uploads);

        // $file       = $request->file('gambar');
        // $nama_file = $file->getClientOriginalName();
        // $destinationPath = 'uploads';
        // $file->move($destinationPath, $fil

        // if ($request->hasFile('gambar')) {
        //     $resorce       = $request->file('gambar');
        //     $name   = $resorce->getClientOriginalName();
        //     $resorce->move(\base_path() . "/public/gambar", $name);
        //     Ruangan::create([
        //         'gambar' => $request->keterangan,
        //     ]);
        // }


        return redirect('/admin')->with('status', 'Data Berhasil Ditambahkan!');

        //return $request;
    }

    public function destroy(Ruangan $ruangan)
    {
        //return $employee;
        Ruangan::destroy($ruangan->id);
        return redirect('/admin')->with('status', 'Data Berhasil Dihapus!');
    }

    public function edit(Ruangan $ruangan)
    {
        return view('admin/edit', compact('ruangan'));
    }

    public function update(Request $request, Ruangan $ruangan)
    {
        if (empty($request->file)) {
            $nama_file = $ruangan->gambar;
        }
        if (!empty($request->file)) {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $nama_file = $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'uploads';
            $file->move($tujuan_upload, $nama_file);
        }
        
        Ruangan::where('id', $ruangan->id)
            ->update([
                'nama_ruangan' => $request->nama_ruangan,
                'kapasitas' => $request->kapasitas,
                'keterangan' => $request->keterangan,
                'gambar' =>  $nama_file
            ]);

        return redirect('/admin')->with('status', 'Data Berhasil Dihapus!');
    }
}
