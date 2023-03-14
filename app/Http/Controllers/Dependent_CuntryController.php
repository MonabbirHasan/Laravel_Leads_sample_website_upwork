<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dependent_CuntryController extends Controller
{
    public function Index(){
        $data['cuntry']=DB::table('cuntry')->get();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return view("pages.home2",$data);
    }

    public function getstate($country_id){
        $states['state']=DB::table('state')->where('country_id',$country_id)->get();
        return response()->json([
            'status' => 1,
            'states' => $states
        ]);
    }
    public function City($state_id){
        $citys['city']=DB::table('city')->where('state_id',$state_id)->get();
        return response()->json([
            'status' => 1,
            'city' => $citys
    ]);
    }



}
