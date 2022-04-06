<?php

namespace App\Http\Livewire;

use App\Models\course;
use Livewire\Component;

class Addcourse extends Component
{
    public $course_nm;


    protected $rules = [
        'course_nm' => 'required|max:12',

    ];


    public function newroom()
    {
        $this->validate();

        course::create([
            'course_nm' => $this->course_nm,
        ]);
        session()->flash('success', 'Trainee Added Successfully');
    }

    public function render()
    {
        return view('livewire.addcourse');
    }
}
