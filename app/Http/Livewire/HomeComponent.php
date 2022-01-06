<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fserivces = Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured',1)->inRandomOrder()->take(8)->get();
        return view('livewire.home-component', ['scategories' => $scategories,'fserivces'=>$fserivces,'fscategories'=>$fscategories])->layout('frontend.layouts.base');
    }
}
