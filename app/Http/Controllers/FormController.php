<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;


class FormController extends BaseController
{
    function Certificate(){
        return view ('Certificate');
    }

    function Oficial(){
        return view ('Oficial');
    }

    function Postpone(){
        return view ('Postpone');
    }
    function Prorata(){
        return view ('Prorata');
    }
    function ResultsReq(){
        return view ('ResultsReq');
    }
    function Transfer(){
        return view ('Transfer');
    }

}

?>