<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\WithPagination;
use Livewire\Component;


class AdminServiceProvider extends Component
{
    use WithPagination;
    public function deleteServiceProvider($id)
    {
        $sproviders = ServiceProvider::find($id);
        if ($sproviders->image) {
            unlink('images/sproviders' . '/' . $sproviders->image);
        }
        $sproviders->delete();
        session()->flash('message', 'Service Provider has been deleted successfully!');
    }
    public function render()
    {
        $sproviders = ServiceProvider::paginate(10);
        return view('livewire.admin.admin-service-provider', ['sproviders' => $sproviders])->layout('FrontEnd.layouts.guest');
    }
}
