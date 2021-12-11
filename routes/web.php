<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactComponenet;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Customer\CustomerProfileComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderProfileComponent;
use App\Http\Livewire\Customer\EditCustomerProfileComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Sprovider\EditSproviderProfileComponent;


Route::get('/', HomeComponent::class)->name('home');//->middleware('verified');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');
Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');

Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class,'searchService'])->name('searchService');

Route::get('/contact-us',ContactComponenet::class)->name('home.contact');


Route::middleware(['auth:sanctum' ])->group(function(){
	Route::get('/costumer/dashboard',CustomerDashboardComponent::class)->name('costumer.dashboard');
	Route::get('/costumer/profile',CustomerProfileComponent::class)->name('costumer.profile');
	Route::get('/costumer/profile/edit',EditCustomerProfileComponent::class)->name('costumer.edit_profile');
    Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');

	
});

//For S Provider
Route::middleware(['auth:sanctum','authsprovider'])->group(function(){
	Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
	Route::get('/sprovider/profile',SproviderProfileComponent::class)->name('sprovider.profile');
	Route::get('/sprovider/profile/edit',EditSproviderProfileComponent::class)->name('sprovider.edit_profile');
});

// For Admin
Route::middleware(['auth:sanctum','authadmin'])->group(function(){
	Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
	Route::get('/admin/contacts',AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin/service-categories',AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_categories');
    Route::get('/admin/service-categories/edit/{category_id}',AdminEditServiceCategoryComponent::class)->name('admin.edit_service_categories');
	Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
    Route::get('/admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
    Route::get('/admin/service/add',AdminAddServiceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
});
