<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Employee;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ruangans = Ruangan::all();
        // dd($ruangans);
        return view('home', compact('ruangans'));
    }

    public function contact(Employee $employee)
    {
        // $ruangans = Ruangan::all();
        // // dd($ruangans);
        // return view('home', compact('ruangans'));

        // return view('employees/contact', compact('employee'));

        $employees = Employee::all();
        // return view ('employees/index', compact('employees') );
        return view('employees/contact', ['employees' => $employees]);
    }
}
