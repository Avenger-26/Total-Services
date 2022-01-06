<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Paytm;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SproviderDashboardComponent extends Component
{
    public function deleteService($id)
    {
        $paytm = Paytm::find($id);
        if ($paytm->slug_image) 
        {
            unlink('images/services'.'/'.$paytm->slug_image);
        }
        $paytm->delete();
        session()->flash('message','Service has been deleted successfully!');

    }
    public function render()
    {
        $paytms =Paytm::all();
        $totalService = User::where('id',Auth::user()->id)->count();
        $totalUser = Paytm::where('sprovider_id',Auth::user()->id)->count();
        $totalServe = Paytm::Where('slug_id',Auth::user()->slug_id)->count();
        $totalEarning = Paytm::where('sprovider_id',Auth::user()->id)->sum('price');
        return view('livewire.sprovider.sprovider-dashboard-component',['paytms'=>$paytms,'totalUser'=>$totalUser,'totalService'=>$totalService,'totalServe'=>$totalServe,'totalEarning'=>$totalEarning])->layout('FrontEnd.layouts.guest');
    }
}
