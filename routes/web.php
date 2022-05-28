<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Church\ChurchManagement;
use App\Http\Livewire\Admin\Dahsboard\MainDashboard;
use App\Http\Livewire\Admin\Church\PredicationManagement;

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

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard/main',MainDashboard::class)->name('admin.dashboard.main');
    Route::get('admin/church/management',ChurchManagement::class)->name('admin.church.management');
    Route::get('admin/church/predication/{church}/mangement',PredicationManagement::class)->name('admin.church.predication');
});
