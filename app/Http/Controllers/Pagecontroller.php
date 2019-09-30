<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;
use App\user;
use App\candidate1;
use App\candidate2;
use Auth;
use Validator;





class Pagecontroller extends Controller
{



    
    
       
       
     
     

    public function store3(Request $request){

        $this->validate($request, [
            'username'=>'required|max:10',
            'password'=>'required|min:6',
            'Confirm_Password' => 'required_with:password|same:password|min:6',
            'Email'=>'required|email|unique:users,email'


        ]);
        $register = new register;

        $register->username=$request->username;
        $register->password=$request->password;
        $register->Email=$request->Email;
        $register->save();
        return redirect()->back()->with('message','Successfully Resgister');
    }
    
    public function store1(Request $request){

        $this->validate($request, [
            'Course_ID'=>'required',
            'Course_Name'=>'required',
            


        ]);
        $candidate1 = new candidate1;

        $candidate1->id=$request->id;
        $candidate1->Course_ID=$request->Course_ID;
        $candidate1->Course_Name=$request->Course_Name;
        $candidate1->save();
        
        $data=candidate1::all();
        return redirect()->back()->with('message','Saved Successfully');
        
    }
    public function deleteCourses($id){

        $candidate1 = new candidate1;
        $candidate1=$candidate1::find($id);
        $candidate1->delete();
        return redirect()->back();
    }
    public function deleteStudents($id){

        $candidate2 = new candidate2;
        $candidate2=$candidate2::find($id);
        $candidate2->delete();
        return redirect()->back();
    }
    public function updateCourses($id){

      
    }


    public function store2(Request $request){
        $this->validate($request, [
            'First_Name'=>'required',
            'Middle_Name'=>'required',
            'Last_Name'=>'required',
            'Date_Of_Birth'=>'required',
            'Gender'=>'required',
            'Branch'=>'required',
            'Address'=>'required',
            'Email'=>'required|email|unique:users,email',
            'Mobile_Number'=>'required'


        ]);

    
        $candidate2 = new candidate2;

        $candidate2->First_Name=$request->First_Name;
        $candidate2->Middle_Name=$request->Middle_Name;
        $candidate2->Last_Name=$request->Last_Name;
        $candidate2->Date_Of_Birth=$request->Date_Of_Birth;
        $candidate2->Gender=$request->Gender;
        $candidate2->Address=$request->Address;
        $candidate2->Branch=$request->Branch;
        $candidate2->Email=$request->Email;
        $candidate2->Mobile_Number=$request->Mobile_Number;
        $candidate2->save();

        $data=candidate2::all();
        return redirect()->back()->with('message','Saved Successfully');
        
    }
   
   
}



