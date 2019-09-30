<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enotice;

class EnoticeController extends Controller
{
    public function store(Request $request){

        $notice=new Enotice;

       /* $this->validate($request,[
            'year1'=>'required|max:100|min:5',
        ]);
       $this->validate($request,[
            'name1'=>'required|max:100|min:5',
        ]);
        $this->validate($request,[
            'module1'=>'required|max:100|min:5',
        ]);
        $this->validate($request,[
            'type1'=>'required|max:100|min:5',
        ]);*/

        $notice->year=$request->year1;
        $notice->Sname=$request->name1;
        $notice->module=$request->module1;
        $notice->resType=$request->type1;
        $notice->save();

        $data=Enotice::all();

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
