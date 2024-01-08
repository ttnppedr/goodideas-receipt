<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', function () {
    return view('member.list', [
        'members' => \App\Models\Member::all(),
    ]);
});

Route::get('/receipts/member/{id}', function () {

    return view('receipt.show', [
        'members' => \App\Models\Member::all(),
    ]);
})->name('receipt.show');
