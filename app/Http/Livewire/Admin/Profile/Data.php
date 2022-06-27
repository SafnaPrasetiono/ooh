<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithFileUploads;

class Data extends Component
{
    use WithFileUploads;
    public $id_admins, $username, $email, $phone, $born, $address, $avatar;
    public $edit = false;

    protected $rules = [
        'username'     => 'required',
        // 'images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'username.required' => 'Oops, username kamu tidak boleh kosong!',
        // 'images.required' => 'Category must input images!',
        // 'images.image' => 'Oops sepertinya yang diupload bukan gambar!',
        // 'images.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        // 'images.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function mount()
    {
        $this->id_admins = auth('admin')->user()->id_admins;
        $this->username = auth('admin')->user()->username;
        $this->email = auth('admin')->user()->email;
        $this->phone = auth('admin')->user()->phone;
        $this->born = auth('admin')->user()->born;
        $this->address = auth('admin')->user()->address;
        $this->avatar = auth('admin')->user()->avatar;
    }

    public function edit()
    {
        $this->edit = true;
    }

    public function cancle()
    {
        $this->username = auth('admin')->user()->username;
        $this->email = auth('admin')->user()->email;
        $this->phone = auth('admin')->user()->phone;
        $this->born = auth('admin')->user()->born;
        $this->address = auth('admin')->user()->address;
        $this->avatar = auth('admin')->user()->avatar;
        $this->edit = false;
    }

    public function save()
    {
        $this->validate();
        $data = Admin::find($this->id_admins);
        $data->username = $this->username;
        $data->phone = $this->phone;
        $data->born = $this->born;
        $data->address = $this->address;
        $data->avatar = $this->avatar;
        if($data->save()){
            $this->edit = false;
            $this->dispatchBrowserEvent('success', 'Data berhasil diperbaharui!');
        }else{
            $this->edit = false;
            $this->dispatchBrowserEvent('errors', 'Database Error, data Gagal terupdate!!!');
        }
    }

    public function render()
    {
        return view('livewire.admin.profile.data');
    }
}
