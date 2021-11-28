<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ServiceCategoriesComponent;
<<<<<<< HEAD
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
=======
use App\Http\Livewire\ServicesByCategoryComponent;

>>>>>>> efa41566f7a79e5600c0c68ba40c022c9c87df1d


Route::get('/', HomeComponent::class)->name('home');//->middleware('verified');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
<<<<<<< HEAD

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
=======
Route::get('/{category_slug}/services', ServicesByCategoryComponent::class)->name('home.services_by_category');
>>>>>>> efa41566f7a79e5600c0c68ba40c022c9c87df1d
