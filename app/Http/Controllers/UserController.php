<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class UserController extends BaseController
{
    function CarreirGuides(){
        return view ('CarreirGuides');
    }

    function DigitalLibrary(){
        return view ('DigitalLibrary');
    }

    function DigLibandStudAff(){
        return view ('DigLibandStudAff');
    }
    function GeneralNotices(){
        return view ('GeneralNotices');
    }
    function InstituteManuals(){
        return view ('InstituteManuals');
    }
    function ITServices(){
        return view ('ITServices');
    }
    function RegistrationLists(){
        return view ('RegistrationLists');
    }
    function RequestForms(){
        return view ('RequestForms');
    }  
    function StudentAffairs(){
        return view ('StudentAffairs');
    }  
}

?>