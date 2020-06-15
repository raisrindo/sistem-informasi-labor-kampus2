<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    $nama = 'Rais Rindo';
    return view('index', ['nama'=> $nama]);
});

Route::get('/about', function () {
    $nama = 'Rais';
    return view('about', ['nama'=> $nama]);
});

*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/labor', 'LaborController@index');

//Employee
Route::get('/employees', 'EmployeesController@index');
Route::get('/employees/create', 'EmployeesController@create');
Route::get('/employees/{employee}', 'EmployeesController@show');
Route::post('/employees', 'EmployeesController@store');
Route::delete('/employees/{employee}', 'EmployeesController@destroy');
Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
Route::patch('/employees/{employee}', 'EmployeesController@update');