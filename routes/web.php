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
//percobaan pertama
Route::get('/', function () {
    $nama = 'Rais Rindo';
    return view('index', ['nama'=> $nama]);
});

Route::get('/about', function () {
    $nama = 'Rais';
    return view('about', ['nama'=> $nama]);
});

*/

/*
//versi 1
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

*/

//versi 2
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('pinjam/{id}', 'pinjamController@index');
Route::post('pinjam/{id}', 'pinjamController@pinjam');
