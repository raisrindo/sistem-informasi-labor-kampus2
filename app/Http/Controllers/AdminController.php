<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

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
}
