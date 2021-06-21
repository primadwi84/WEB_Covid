<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Places;
use App\Http\Livewire\Districts;
use App\Http\Livewire\Regencies;
use App\Http\Livewire\Provinces;
use App\Http\Livewire\Kabupaten\KabupatenIndex;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Livewire\Data\DataIndex;
use App\Http\Livewire\Desa\DesaIndex;
use App\Http\Livewire\Kecamatan\KecamatanIndex;


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
    return view('datang');
});

Route::get('/index',[InfoController::class,'index'])->name('index')->middleware(['auth:sanctum','verified']);
Route::get('/first',[HomeController::class,'first'])->name('first')->middleware(['auth:sanctum','verified']);


Route::group(['middleware'=> ['auth:sanctum', 'verified', 'accessrole',]],function() {
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('data', Places::class)->name('data');
    

    // Route::get('kabupaten', Regencies::class)->name('kabupaten');
    Route::get('provinsi', Provinces::class)->name('provinsi');
    Route::get('data_kabupaten', KabupatenIndex::class)->name('data_kabupaten');
    Route::get('kecamatan', KecamatanIndex::class)->name('kecamatan');
    Route::get('desa', DesaIndex::class)->name('desa');
    Route::get('datacovid', DataIndex::class)->name('datacovid');
    
    
});