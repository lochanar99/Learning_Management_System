<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eEvents;
use App\eLecs;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function Events(){
        return view('frontEnd.Events');
    }

    public function NewEvent(){
        return view('frontEnd.NewEvent');


    }

public function Add_Extra_Lecture(){
        return view('frontEnd.Add_Extra_Lecture');
    }

    public function store(Request $request){

       $event = new eEvents;

       $this->validate($request,[

        'stdId'=>'required|max:7|min:5',
        'stdName' =>'required|alpha|max:25|min:1',
        //'eDate' =>'required|max:25|min:5',
        'eVenue' =>'required|alpha|max:10|min:6',
        'ePartici'=>'required|integer|digits_between:1,2',
        'eTel' =>'required|integer|digits_between:9,9'

       
       ]);

       $event->stdId=$request->stdId;
       $event->sName=$request->stdName;
       $event->eDate=$request->eDate;
       $event->eVenue=$request->eVenue;
       $event->ePartici=$request->ePartici;
       $event->sTel=$request->eTel;
       $event->save();

       $data=eEvents::all();

       return view('frontEnd.show_current_events')->with('show_current_events',$data);
    
       
    }

    public function stores(Request $request){

        $lecs = new eLecs;

        $this->validate($request,[

            'stdId'=>'required|max:7|min:5',
            'stdName' =>'required|alpha|max:25|min:1',
            'modId' => 'required|max:7|min:5',
            'modName'=>'required|max:20|min:3',
            //'datePos' => 'required|max:25|min:5',
            'eTel' =>'required|integer|digits_between:9,9'



        ]);

        $lecs->stdId=$request->stdId;
        $lecs->sName=$request->stdName;
        $lecs->mId=$request->modId;
        $lecs->mName=$request->modName;
        $lecs->eDate=$request->datePos;
        $lecs->sTel=$request->eTel;
        $lecs->save();

        $data=eLecs::all();

        return view('frontEnd.show_current_lecs')->with('show_current_lecs',$data);
    }

    public function deleteevent($Eid){

        $event=eEvents::find($Eid);

        $event->delete();

        return redirect()->back();

    }

    public function deletelec($Eid){

        $lecs=eLecs::find($Eid);

        $lecs->delete();

        return redirect()->back();
    }

    public function updateLec($Eid){

        $lecs=eLecs::find($Eid);

        return view('frontEnd.updateLec')->with('lecdata',$lecs);
    }

    public function updateLecView(Request $request){

        $Eid = $request->Eid;
        $stdId = $request->stdId;
        $stdName = $request->stdName;
        $modId = $request->modId;
        $modName = $request->modName;
        $datePos = $request->datePos;
        $eTel = $request->eTel;

        $data=eLecs::find($Eid);

        $data->stdId=$stdId;
        $data->sName=$stdName;
        $data->mId=$modId;
        $data->mName=$modName;
        $data->eDate=$datePos;
        $data->sTel=$eTel;

        $data->save();
        $datas=eLecs::all();

        return view('frontEnd.adminshow_current_lecs')->with('show_current_lecs',$datas);

    }

    public function updateEvent($Eid){

        $event=eEvents::find($Eid);

        return view ('frontEnd.updateEvent')->with('eventdata',$event);
    }

    public function updateEventView(Request $request){

            $Eid = $request->Eid;
            $stdId = $request->stdId;
            $stdName = $request->stdName;
            $eDate = $request->eDate;
            $eVenue = $request->eVenue;
            $ePartici = $request->ePartici;
            $eTel = $request->eTel;

            $data=eEvents::find($Eid);

            $data->stdId=$stdId;
            $data->sName=$stdName;
            $data->eDate=$eDate;
            $data->eVenue=$eVenue;
            $data->ePartici=$ePartici;
            $data->sTel=$eTel;

            $data->save();
            $datas=eEvents::all();

            return view('frontEnd.adminshow_current_events')->with('show_current_events',$datas);

    }

    public function Approval($Eid){

        $eApproval = eEvents::find($Eid);
        $eApproval->Approval=1;

        $eApproval->save();

        return redirect()->back();


    }

    public function disApprove($Eid){

        $eApproval = eEVents::find($Eid);
        $eApproval->Approval=0;

        $eApproval->save();

        return redirect()->back();
    }

    public function Approvals($Eid){

        $lApproval = eLecs::find($Eid);
        $lApproval->Approval=1;

        $lApproval->Save();

        return redirect()->back();
    }

    public function disApproves($Eid){
        
        $lApproval = eLEcs::find($Eid);
        $lApproval->Approval=0;

        $lApproval->save();

        return redirect()->back();
    }

    public function search(Request $request){

        $search = $request->get('search');

        $posts = DB::table('e_events')->where('eVenue','LIKE','%' . $search . '%')->paginate(5);

        return view('frontEnd.adminshow_current_events',['show_current_events' => $posts]);
    }

    /*public function searchx(Request $request){

        $search = $request->get('search');

        $posts = DB::table('e_lecs')->get('e');
    }*/ 

    
}
