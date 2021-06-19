<?php
use App\Http\Controllers\Membercontroller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::view('addmember', 'addmember');
Route::post('add', [Membercontroller::class, 'addData']);
Route::get('/', [Membercontroller::class, 'showMember']);
Route::get('delete/{id}', [Membercontroller::class, 'deleteMember']);
Route::get('edit/{id}', [Membercontroller::class, 'editMember']);
Route::post('edit', [Membercontroller::class, 'updateData']);
