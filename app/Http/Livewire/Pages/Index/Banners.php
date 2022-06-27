<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\banners as ModelsBanners;
use Livewire\Component;

class Banners extends Component
{
    public function render()
    {
        $data = ModelsBanners::orderBy('created_at')->get();
        return view('livewire.pages.index.banners', ['data' => $data]);
    }
}
