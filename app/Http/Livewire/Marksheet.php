<?php

namespace App\Http\Livewire;

use App\Models\register_mark;
use Illuminate\Support\Facades\DB;
use App\Models\Trainee;
use Livewire\Component;

class Marksheet extends Component
{
    public $trainee;
    public $dorm_nm;
    public $marking;
    public $trainee_id;


//    protected $rules = [
//        'trainee_nm' => 'required',
//        'dorm_rm' => 'required',
//        'marking' => 'required',
//
//    ];

    public function render()
    {
//        $user = DB::table('trainee')->orderBy('room', 'asc')->get();
        $mark = \App\Models\marksheet::with('trainee')->get();
        return view('livewire.marksheet', ['mark'=>$mark]);
    }

    public function present($id){
        $trainee = \App\Models\marksheet::where('id', $id)->update(['mark'=>1]);
    }

    public function absent($id){
        $trainee = \App\Models\marksheet::where('id', $id)->update(['mark'=>2]);
    }
    public function resetStatus(){
       $status = \App\Models\marksheet::get('id');
       $newStatus = collect($status)->map(function ($id){
           return( //$id
               \App\Models\marksheet::where('id',$id->id)->update(['mark' => 0])
           );
       });
       //dd($newStatus);
    }
    public function store(){
        $trainee_id = $this->trainee_id;
        $trainee = $this->trainee;
        $dorm_nm = $this->dorm_nm;
        $marking = $this->marking;
//
        $datasave = [
          'trainee_id' => $trainee_id,
          'trainee' => $trainee,
            'dorm_nm' => $dorm_nm,
            'marking' => $marking
        ];
        dd($datasave);

    }
}
