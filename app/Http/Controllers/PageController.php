<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{

    public function welcome(){
        $db = DB::table('publishes')->orderBy('created_at','desc')->limit(10)->get();
        return view('welcome')->with(["new"=>$db]);
    }

    public function gallery(){
    	return view('gallery');
    }

    public function info(){
    	return view('info');
    }

    public function search(Request $request){

    	$db = DB::table('publishes')->where('image_title','LIKE',"%$request->q%")->get();
    	return view('search')->with(["cards"=>$db]);
    }

    public function card($id){
    	$db = DB::table('publishes')->where('id',$id)->get();
    	return view('card')->with(['card'=>$db]);
    }

}
