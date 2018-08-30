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
Route::get('/pagina1', function () {
    return view('pagina1',[

        'name'=>'Carlos Grajales',
        'phone'=>'3103911515',
        'email'=>'carlosandres9326@gmail.com'

    ]);


});

*/

Route::get('/pagina2/{num_table}', function ($num_table) {
    return view('pagina2',
    [

        'num_table'=> $num_table,
       

    ]);

    
});