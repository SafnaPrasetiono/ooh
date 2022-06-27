<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\loker;
use Livewire\Component;

class LokerHospitality extends Component
{
    public function render()
    {
        $data = loker::where('type', 'hospitality')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.pages.index.loker-hospitality', ['data' => $data]);
    }
}
