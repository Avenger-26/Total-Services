<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SproviderServicesComponent extends Component
{
    public function deleteService($id)
    {
        $service = Service::find($id);
        if ($service->thumbnail) 
        {
            unlink('images/services/thumbnails'.'/'.$service->thumbnail);
        }
        if ($service->image) 
        {
            unlink('images/services'.'/'.$service->image);
        }
        $service->delete();
        session()->flash('message','Service has been deleted successfully!');

    }
    public function render()
    {
        $services = Service::where('service_category_id',Auth::user()->service_category_id)->paginate(10);
        return view('livewire.sprovider.sprovider-services-component',['services'=>$services])->layout('frontend.layouts.guest')->with('no', 1);
    }
}
