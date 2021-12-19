<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddServiceProvider extends Component
{
    use WithFileUploads;
    public function addServiceProvider()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
        $sproviders = new ServiceProvider();
        $sproviders->name = $this->name;
        $sproviders->email = $this->email;
        $sproviders->password = $this->password;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->getClientOriginalName();
        $this->image->storeAs('images/sproviders', $imageName);
        $sproviders->image = $imageName;
        $sproviders->phone = $this->phone;
        $sproviders->address = $this->address;
        $sproviders->service_category_id = $this->service_category_id;
        $sproviders->save();
        session()->flash('message', 'Profile has been Added successfully !');
        return redirect()->back()->with('message', 'Profile Added successfully !');
    }
    public function render()
    {
        // $scategories = ServiceCategory::all();
        // return view('livewire.admin.admin-add-service-provider', ['scategories' => $scategories])->layout('FrontEnd.layouts.guest');
        return view('livewire.admin.admin-add-service-provider')->layout('FrontEnd.layouts.guest');
    }
}
