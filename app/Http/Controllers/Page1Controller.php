<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;

class Page1Controller extends Controller
{
    public function store1(Request $request){

        $lec = new lecturer;

        $this->validate($request,[
            'finame'=>'required|max:100|min:5',
            'laname'=>'required  |max:100|min:5',
            'date'=>'required',
            'nic'=>'required|max:100|min:5',
            'lmail'=>'required|email|max:100|min:5',
            'ldes'=>'required|max:100|min:5',
            'psw'=>'required|max:10|min:3',
            'cpsw'=>'required|max:10|min:3',

        ]);

        $lec->firstname=$request->finame;

        $lec->lastname=$request->laname;

        $lec->dob=$request->date;

        $lec->nic=$request->nic;

        $lec->lemail=$request->lmail;

        $lec->equli=$request->ldes;

        $lec->lpassword=$request->psw;

        $lec->lcompassword=$request->cpsw;
         $lec->save();

        $data=lecturer::all();

        return redirect()->back();

        //return view('/index');

    }
}
