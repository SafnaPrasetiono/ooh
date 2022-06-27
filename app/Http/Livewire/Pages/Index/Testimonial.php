<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\testimonials;
use Livewire\Component;

class Testimonial extends Component
{
    public function render()
    {
        $data = testimonials::all();
        return view('livewire.pages.index.testimonial', ['data' => $data]);
    }
}
