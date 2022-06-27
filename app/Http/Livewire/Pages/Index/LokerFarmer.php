<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\loker;
use Livewire\Component;

class LokerFarmer extends Component
{
    public function render()
    {
        $data = loker::where('type', 'nt-farmer')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.pages.index.loker-farmer', ['data' => $data]);
    }
}
