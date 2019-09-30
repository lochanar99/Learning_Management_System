<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class resultController extends Controller
{
    public function store(Request $request){

        $result=new Result;

        $this->validate($request,[
            'year1'=>'required|max:100|min:5',
             'name1'=>'required|max:100|min:5',
            'module1'=>'required|max:100|min:5',
            'type1'=>'required|max:100|min:5',
        ]);


        $result->year=$request->year1;
        $result->Sname=$request->name1;
        $result->module=$request->module1;
        $result->resType=$request->type1;
        $result->save();

        $data=Result::all();

        return view('results')->with('results',$data);
        return view('resultsStu')->with('resultsStu',$data);

        //dd($request->all());
    }
    //delete
    public function deleteResult($Rid){
     
        $res=Result::find($Rid);
      
      $res->delete();
        return redirect()->back();
    }

    //update
   public function updateResultview($Rid){
        $res=Result::find($Rid);

        return view('updateResult')->with('resultdata',enotice);
    }
}
