<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){
        return view('project.index');
    }
    public function count(Request $request){
      $data = explode(',', $request->input);
      
      $result = array_count_values($data);

    
     
     return view('project.result',['result'=>$result],['data'=>$data]);
    
    
    }
    public function result(){
    
        return view('project.result');
    }
    public function back(){
    
        return view('project.index');
    }

   
}
