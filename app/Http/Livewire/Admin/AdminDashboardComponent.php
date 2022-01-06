<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Contact;
use App\Models\Paytm;
use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminDashboardComponent extends Component
{
    
    public function render()
    {
        $totalServiceProvider = User::where('u_type', 'SPV')->count();
        $totalUser = User::where('u_type', 'CST')->count();
        $totalServiceCategories = ServiceCategory::count();
        $totalAmount = Paytm::all()->sum('price');
        $total = ($totalAmount*10)/100;
        return view('livewire.admin.admin-dashboard-component', ['totalServiceProvider' => $totalServiceProvider, 'totalUser' => $totalUser,'totalServiceCategories'=>$totalServiceCategories,'total'=>$total])->layout('FrontEnd.layouts.guest');
    }
}
