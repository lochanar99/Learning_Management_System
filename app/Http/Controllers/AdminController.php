<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;
use App\Book;
use App\Carrier;

class AdminController extends BaseController
{
    

    function AdminDigLibandStudAff(){
        return view ('AdminDigLibandStudAff');
    }
    function AdminGeneralNotices(){
        return view ('AdminGeneralNotices');
    }
    function AdminInstituteManuals(){
        return view ('AdminInstituteManuals');
    }
    function AdminITServices(){
        return view ('AdminITServices');
    }
    function AdminRegisterationList(){
        return view ('AdminRegisterationList');
    }
    function AdminRequestForms(){
        return view ('AdminRequestForms');
    }  
    function AdminStudentAffairs(){
        return view ('AdminStudentAffairs');
    }  

    public function store(Request $request){
        $Book=new Book;

        $validatedData = $request->validate([
            'BookName'=>'required|max:200|min:2',
            'Desc'=>'required|max:200|min:2',
            'LecID'=>'required|max:200|min:2',
            'LecName'=>'required|max:200|min:2'
        ]);
        
       
        $Book->BookName=$request->BookName;
        $Book->Desc=$request->Desc;
        $Book->LecID=$request->LecID;
        $Book->LecName=$request->LecName;
        $Book->save();

        $data=Book::all();
        return view('AdminDigitalLib')->with('books',$data);
    }

    public function deleteBook($BookID){
        $Book=Book::find($BookID);
        $Book->delete();
        return redirect()->back();
    }


    public function guide(Request $request){
        $Carrier=new Carrier;

        $validatedData = $request->validate([
            'CarName'=>'required|max:200|min:2',
            'Desc'=>'required|max:200|min:2',
            'LecID'=>'required|max:200|min:2',
            'LecName'=>'required|max:200|min:2'
        ]);
        
       
        $Carrier->CarName=$request->CarName;
        $Carrier->Desc=$request->Desc;
        $Carrier->LecID=$request->LecID;
        $Carrier->LecName=$request->LecName;
        $Carrier->save();

        $data=Carrier::all();
        return view('AdminCarrierGuide')->with('carriers',$data);
    }

    public function deleteCarrier($CarID){
        $Carrier=Carrier::find($CarID);
        $Carrier->delete();
        return redirect()->back();
    }
}

?>