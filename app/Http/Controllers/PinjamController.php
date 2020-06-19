<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

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
}
