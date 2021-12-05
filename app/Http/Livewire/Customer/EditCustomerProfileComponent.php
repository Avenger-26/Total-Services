<?php

namespace App\Http\Livewire\Customer;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomersTotalService;


class EditCustomerProfileComponent extends Component
{
    use WithFileUploads;
    public $customer_id;
    public $image;
    public $phone;
    public $city;
    public $newimage;

    public function mount()
    {
        $scustomer = CustomersTotalService::where('user_id',Auth::user()->id)->first();
        $this->customer_id = $scustomer->id;
        $this->image = $scustomer->image;
        $this->phone = $scustomer->phone;
        $this->city = $scustomer->city;
    }
    public function updateProfile()
    {
        $scustomer = CustomersTotalService::where('user_id', Auth::user()->id)->first();
        if ($this->newimage) 
        { 
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('public/images/customer', $imageName);
            $scustomer->image = $imageName;
        }
        $scustomer->phone = $this->phone;
        $scustomer->city = $this->city;
        $scustomer ->save();
        session()->flash('message', 'Profile has been updated successfully !'); 
    }
    public function render()
    {
        return view('livewire.customer.edit-customer-profile-component')->layout('FrontEnd.layouts.guest');
    }
}
