<?php

namespace App\Http\Livewire\Admin\Loker;

use App\Models\loker;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $id_loker;

    protected $listeners = ["deleteAction" => "delete"];

    public function removed($id){
        $this->id_loker = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete()
    {
        $data = loker::find($this->id_loker);
        if ($data) {
            $data->delete();
            return session()->flash('success', 'Data has been delete!');
        } else {
            return session()->flash('error', 'sorry something problem in database!');
        }
    }

    public function render()
    {
        $data = loker::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.loker.data', [
            'data' => $data
        ]);
    }
}
