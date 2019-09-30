<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;

class LectureController extends Controller
{
    public function store(Request $request){
       
        $this->validate($request,[
            'title'=>'required|max:100|min:5',
            'l_des'=>'required|max:100|min:5',
            'module'=>'required|max:100|min:5',
            
            ]);

        $task = new Lecture;

        $task->title=$request->title;
        $task->l_des=$request->l_des;
        $task->module=$request->module;

        $task->save();

            return redirect()->back();
        $data=Lecture::all();
        return view('Lecture_Module_Page')->with('lectures,$data');


    }

    public function deletetask($id){
        $task=Lecture::find($id);
        $task->delete();
        return redirect()->back();

    }
}
