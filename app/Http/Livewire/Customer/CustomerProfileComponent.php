<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomersTotalService;


class CustomerProfileComponent extends Component
{
    public function render()
    {
        $scustomer= CustomersTotalService::where('user_id',Auth::user()->id)->first();
        return view('livewire.customer.customer-profile-component',['scustomer'=>$scustomer])->layout('FrontEnd.layouts.guest');
    }
}
