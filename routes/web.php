<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerProfileComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderProfileComponent;
use App\Http\Livewire\Customer\EditCustomerProfileComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Sprovider\EditSproviderProfileComponent;


Route::get('/', HomeComponent::class)->name('home');//->middleware('verified');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');

Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class,'searchService'])->name('searchService');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	Route::get('/costumer/dashboard',CustomerDashboardComponent::class)->name('costumer.dashboard');
	Route::get('/costumer/profile',CustomerProfileComponent::class)->name('costumer.profile');
	Route::get('/costumer/profile/edit',EditCustomerProfileComponent::class)->name('costumer.edit_profile');
	
});

//For S Provider
Route::middleware(['auth:sanctum', 'verified','authsprovider'])->group(function(){
	Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
	Route::get('/sprovider/profile',SproviderProfileComponent::class)->name('sprovider.profile');
	Route::get('/sprovider/profile/edit',EditSproviderProfileComponent::class)->name('sprovider.edit_profile');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
	Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
