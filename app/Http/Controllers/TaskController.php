<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class TaskController extends Controller
{
    public function store(Request $request){
       
       
        $feed = new feedback;

      /*  $this->validate($request,[
            'sname'=>'required|max:100|min:5',
            'mail'=>'required|email|max:100|min:5',
            'lname'=>'required',
            'smsg'=>'required|max:100|min:5',
        ]);*/

        $feed->sname=$request->sname;

        $feed->email=$request->mail;

        $feed->lname=$request->lname;

        $feed->message=$request->smsg;
        $feed->save();

        $data=feedback::all();

        return redirect()->back();
        
        //return view('viewfeedback')->with('feedback',$data);



        //dd($request->all());
    }

}
