<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminUpdateProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-update-profile-component')->layout('FrontEnd.layouts.guest');
    }
}
