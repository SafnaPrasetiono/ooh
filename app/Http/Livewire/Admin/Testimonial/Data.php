<?php

namespace App\Http\Livewire\Admin\Testimonial;

use App\Models\testimonials;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $id_testimonial;
    public $username, $description, $images;
    public $edit = false;

    protected $rules = [
        'images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    ];

    protected $messages = [
        'username.required' => 'Oops, nama harus terisi!',
        'description.required' => 'Oops, masukan description testimonial!',
        'images.required' => 'Oops, foto testimonial harus terupload!',
        'images.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'images.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'images.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function show()
    {
        $this->username     = '';
        $this->description  = '';
        $this->images       = '';
        $this->dispatchBrowserEvent('showModals');
    }

    public function store()
    {
        $this->validate();

        $source = $this->images;
        $originName = $source->getClientOriginalName();
        $images = "AVT-" . substr(md5($originName . date("YmdHis")), 0, 28) . '.' . $source->getClientOriginalExtension();

        $data = new testimonials();
        $data->username     = $this->username;
        $data->description  = $this->description;
        $data->images       = $images;
        if($data->save()){
            $source->storeAs('/images/testimonial/',  $images, 'myLocal');
            $this->dispatchBrowserEvent('success', 'Data berhasil ditambahkan!');
        }else{
            $this->dispatchBrowserEvent('error', 'Oops, tejadi kesalahan database ulangi nanti!');
        }
        $this->dispatchBrowserEvent('expandModals');
    }

    public function edit($id)
    {
        $data = testimonials::find($id);
        $this->username = $data->username;
        $this->description = $data->description;
        $this->images = $data->images;
        $this->id_testimonial = $data->id_testimonials;
        $this->edit = true;
        $this->dispatchBrowserEvent('showModals');
    }

    public function update()
    {
        $data = testimonials::find($this->id_testimonial);
        $data->username     = $this->username;
        $data->description  = $this->description;
        if($data->save()){
            $this->dispatchBrowserEvent('success', 'Data berhasil terupdate!');
        }else{
            $this->dispatchBrowserEvent('error', 'Oops, tejadi kesalahan database ulangi nanti!');
        }
        $this->dispatchBrowserEvent('expandModals');
    }

    public function render()
    {
        $data = testimonials::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.testimonial.data', ['data' => $data]);
    }
}
