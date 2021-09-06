<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Demo extends Model
{
    function get_data()
    {
        $data = DB::table('dummy')->get()->toJson();
        return $data;
    }

    function get_question($id)
    {
        $error_code = '';
        $msg = 'Success';
        $current_data = [];
        $total_question = DB::table('tbl_questions')->get()->count();
        $check_exists = DB::table('tbl_questions')->where('in_question_id', $id)->count();
        if ($check_exists == 0) {
            $error_code = 404;
            $msg = 'Qestion Not Found';
        } else {
            $current_data = DB::table('tbl_questions')->where('in_question_id', $id)->first();
        }
        $data = [
            'total_questions' => $total_question,
            'current_question' => $id,
            'error_code' => $error_code,
            'error_message' => $msg,
            'data' => $current_data
        ];
        return $data;
    }

    function get_selected_question($id)
    {
        $data = DB::table('tbl_results')->where('in_result_id')->first();
        return $data;
    }

    function put_result(Request $request)
    {
        $score = $request->score;
        $ip = $request->ip();
        $id = DB::table('tbl_results')->insertGetId(
            ['in_score' => $score, 'st_ip_address' => $ip]
        );
        $result = [];
        if( $id ){
            $result = [
                'error_code' => '',
                'error_message' => '',
            ];
        } else {
            $result = $id;
        }
        return $result;
    }
}
