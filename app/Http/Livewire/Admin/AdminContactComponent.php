<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AdminContactComponent extends Component
{

    public function render()
    {
        $contacts = Contact::paginate(15);
        // $totalContact = Contact::count();
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('frontend.layouts.guest');
    }
}
