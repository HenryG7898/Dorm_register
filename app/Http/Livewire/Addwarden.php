<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class Addwarden extends Component
{
    public $first_nm;
    public $last_nm;
    public $email;
    public $password;
    public $warden_id;


    protected $rules = [
        'first_nm' => 'required|max:25',
        'last_nm' => 'required|max:25',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ];


    public function newwarden()
    {
        $this->validate();

        User::create([
            'first_nm' => $this->first_nm,
            'last_nm'  => $this->last_nm,
            'role' => 'warden',
            'email' => $this->email,
            'warden_ID' => $this->warden_id,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Warden Added Successfully');
    }

    public function updated()
    {
        $this->validate();
    }

    public function mount()
    {
        $this->warden_id = Str::random(10);
    }

    public function render()
    {
        return view('livewire.addwarden');
    }
}
