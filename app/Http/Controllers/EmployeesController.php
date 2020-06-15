<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        // return view ('employees/index', compact('employees') );
        return view ('employees/index', ['employees' => $employees] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employees/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employee = new Employee;
        // $employee->nama =$request->nama;
        // $employee->nip =$request->nip;
        // $employee->email =$request->email;
        // $employee->posisi =$request->posisi;

        // $employee->save();

        //cara 2
        // Employee::create([
        //     'nama' => $request->nama,
        //     'nip' => $request->nip,
        //     'email' => $request->email,
        //     'posisi' => $request->posisi,
        // ]);


        $request->validate([
            'nama'=>'required',
            'nip'=>'required|size:6'
           
        ]);

        //cara 3       
        Employee::create($request->all());

        return redirect('/employees') -> with ('status', 'Data Berhasil Ditambahkan!');
        
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view ('employees/show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees/edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        Employee::where('id',$employee->id)
            ->update([
                'nama'=>$request->nama,
                'nip'=>$request->nip,
                'email'=>$request->email,
                'posisi'=>$request->posisi,
            ]);
            return redirect('/employees') -> with ('status', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //return $employee;
        Employee::destroy($employee->id);
        return redirect('/employees') -> with ('status', 'Data Berhasil Dihapus!');


    }
}
