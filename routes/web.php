<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('customer/index');});
Route::get('/create', function () {return view('customer/create');});
Route::post('/cust_data_report', 'UserTicketController@get_ticket_data');
Route::post('/user/ticket/store', 'UserTicketController@store_data');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'App\Http\Middleware\ChecksuperAdmin'], function()
{
    Route::get('admin/ticket', 'AdminTicketController@index');
    Route::post('admin/ticket/reply/{id}', 'AdminTicketController@update');
    Route::get('admin/tickets/view/{id}', 'AdminTicketController@view');


});
