<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LecHall;
use App\LabItem;
use App\Stationery;

class TaskController extends Controller
{

    public function store(Request $request){

        $item = new LecHall;

        $this->validate($request, [
            'lec'=>'required|max:50|min:4',
            'lecname'=>'required|max:50|min:4',
            'lecno'=>'digits_between:1,2',
            'lecqty'=>'digits_between:1,3',
            

        ]);


        $item->ItemCode=$request->lec;
        $item->ItemName=$request->lecname;
        $item->HallNo=$request->lecno;
        $item->Quantity=$request->lecqty;
        $item->Status=$request->lecdrop;

        $item->save();

        $data = LecHall::all();

        return view('Lecture_hall_Item_View')->with('Lecture_hall_Item_View', $data);



    }


    public function store1(Request $request){
        $data = new LabItem;

        $this->validate($request, [
            'lab'=>'required|max:50|min:4',
            'labname'=>'required|max:50|min:4',
            'labcur'=>'digits_between:1,2',
            'labreq'=>'digits_between:1,3',
            'labqty'=>'digits_between:1,3'

        ]);


        $data->ItemCode=$request->lab;
        $data->ItemName=$request->labname;
        $data->CurrentItem=$request->labcur;
        $data->RequiredItem=$request->labreq;
        $data->Quantity=$request->labqty;
        $data->Status=$request->labdrop;

        $data->save();

        $da = LabItem::all();




        return view('Lab_Item_View')->with('Lab_Item_View', $da);

    }

    public function store2(Request $request){
        $stat = new Stationery;


        $this->validate($request, [
            'sta'=>'required|max:50|min:4',
            'staname'=>'required|max:50|min:4',
            'stacur'=>'digits_between:1,2',
            'stareq'=>'digits_between:1,3',
            'staqty'=>'digits_between:1,3'

        ]);        


        $stat->ItemCode=$request->sta;
        $stat->ItemName=$request->staname;
        $stat->CurrentItem=$request->stacur;
        $stat->RequiredItem=$request->stareq;
        $stat->Quantity=$request->staqty;
        $stat->Status=$request->stadrop;

        $stat->save();

        $some = Stationery::all();

        return view('Stationery_Item_View')->with('Stationery_Item_View', $some);

    }

    public function deletetaskx($id){
        
        $item=LecHall::find($id);
        $item->delete();
        return redirect()->back();

    }


}
