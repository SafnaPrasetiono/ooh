<?php

namespace App\Http\Livewire\Pages\Service;

use App\Models\loker;
use Livewire\Component;
use Livewire\WithPagination;

class Ntfarmer extends Component
{
    use WithPagination;
    public $search;
    public $type;

    public function mount($post)
    {
        $this->type = $post;
    }

    public function render()
    {
        if($this->search){
            $data = loker::where('type', $this->type)->where('title', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->paginate(12);
        }else{
            $data = loker::where('type', $this->type)->orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.pages.service.ntfarmer', ['data' => $data]);
    }
}
