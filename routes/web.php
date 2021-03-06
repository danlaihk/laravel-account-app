<?php

use Illuminate\Support\Facades\Route;
use App\Service\Layouts\Menu;

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


Route::middleware(['adminMenu', 'setLocale:en'])->group(function () {
    Route::get('/', function () { return redirect('admin'); })->name('index');
    Route::get('admin',  'Admin\Panel@Index')->name('panel.index');
    Route::get('day-account','Account\DayAccounts@Index')->name('dayAccount.index');
});





Route::get('testDB', function(){
    dd(\App\Models\Account\DayAccount::all());

})->name('test.testDB');
