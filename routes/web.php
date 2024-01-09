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

Route::get('/receipts/member/{memberId}', function () {

    $memberId = request()->route('memberId');
    $member = \App\Models\Member::whereId($memberId)->with('incomes')->firstOrFail();

    $receiptGroupByDate = $member->incomes->groupBy(function ($item, $key) {
        return $item->date->format('Y-m');
    });

    return view('receipt.list', compact('member', 'receiptGroupByDate'));
})->name('receipt.list');
