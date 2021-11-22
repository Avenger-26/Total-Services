<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomeComponent::class)->name('home');

// For Costumer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	Route::get('/costumer/dashboard',CustomerDashboardComponent::class)->name('costumer.dashboard');
});

//For S Provider
Route::middleware(['auth:sanctum', 'verified','authsprovider'])->group(function(){
	Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
	Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
