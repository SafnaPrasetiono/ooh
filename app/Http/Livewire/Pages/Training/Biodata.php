<?php

namespace App\Http\Livewire\Pages\Training;

use App\Models\Province;
use App\Models\User;
use Livewire\Component;

class Biodata extends Component
{
    public $username, $email, $born, $phone, $gender;

    public function render()
    {
        return view('livewire.pages.training.biodata');
    }
}
