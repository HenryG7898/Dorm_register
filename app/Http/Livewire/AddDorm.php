<?php

namespace App\Http\Livewire;

use App\Models\dorm;
use App\Models\Trainee;
use Livewire\Component;

class AddDorm extends Component
{
    public $dorm_room;


    protected $rules = [
        'dorm_room' => 'required|max:12',

    ];


    public function newroom()
    {
        $this->validate();

        dorm::create([
            'dorm_room' => $this->dorm_room,
        ]);
        session()->flash('success', 'Trainee Added Successfully');
    }

    public function render()
    {
        return view('livewire.add-dorm');
    }
}
