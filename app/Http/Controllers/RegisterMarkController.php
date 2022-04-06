<?php

namespace App\Http\Controllers;

use App\Models\marksheet;
use Illuminate\Http\Request;

class RegisterMarkController extends Controller
{
     public function index(){
        $mark = marksheet::with('trainee')->get();
         return view('demopage',['mark'=>$mark]);
     }

    public function store(Request $request){
//        dd($request->all());
        $trainee_id = $request->trainee_id;
        $dorm_nm = $request->trainee;
        $marking = $request->marking;
//        dd(        $trainee = $request->trainee);
        $datasave = [
            'trainee_id' => $trainee_id,
            'dorm_nm' => $dorm_nm,
            'marking' => $marking
        ];
        return dd($datasave);
    }

}
