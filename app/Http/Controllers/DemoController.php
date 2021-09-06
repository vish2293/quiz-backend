<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Demo;

class DemoController extends Controller
{
    function get_view()
    {
        return view('index');
    }

    function get_question($id){
        $demo = new Demo();
        $data = $demo->get_question($id);
        return json_encode($data);
    }

    function put_result(Request $request){
        $demo = new Demo();
        $record = $demo->put_result($request);
        return json_encode($record);
    }
}
