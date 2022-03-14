<?php

namespace App\Http\Livewire;

use App\Models\Trainee;
use Illuminate\Support\Str;
use App\Models\User;
use Livewire\Component;

class Addtrainee extends Component
{
    public $first_nm;
    public $last_nm;
    public $gender;
    public $DOB;
    public $email;
    public $password = '';
//    public $user_type;
    public $room;
    public $telephone;
    public $trainee_ID;
    public $course;


    protected $rules = [
        'first_nm' => 'required|max:25',
        'last_nm' => 'required|max:25',
        'gender' => 'required',
        'DOB' => 'required',
        'email' => 'required|email|unique:users',
//        'password' => 'required ',
        'room' => 'required',
        'telephone' => 'required',
        'course' => 'required'
    ];


    public function newtrainee()
    {


        $this->validate();

        User::create([
            'first_nm' => $this->first_nm,
            'last_nm'  => $this->last_nm,
            'DOB'  => $this->DOB,
            'course' => $this->course,
            'role' => 'trainee',
            'gender'  => $this->gender,
            'email' => $this->email,
            'room' => $this->room,
            'telephone' => $this->telephone,
            'trainee_ID' => $this->trainee_ID,
        ]);

        session()->flash('success', 'Trainee Added Successfully');

    }

    public function updated()
    {
        $this->validate();
    }

    public function mount()
    {
        $this->trainee_ID = Str::random(10);
    }
    public function render()
    {
        return view('livewire.addtrainee');
    }
}
