<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;

class assignmentController extends Controller
{
    public function store(Request $request){

        $assignment=new Assignment;

        $this->validate($request,[
            'assignment'=>'required|max:100|min:5',
              'assignment1'=>'required|max:100|min:5',
        ]);

        $assignment->aName=$request->assignment;
        $assignment->Asub=$request->assignment1;
        $assignment->save();

        $data=Assignment::all();

        return view('assignments')->with('assignments',$data);
        return view('assignmentsStu')->with('assignmentsStu',$data);

        //dd($request->all());
    }
}
