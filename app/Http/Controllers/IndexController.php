<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Post;

class IndexController extends Controller
{
    public function loadIndex(Request $request){
        
        $posts = DB::table('tbl_post')->paginate(8);
        $categories = DB::table('tbl_categories')->get();

    	
    	return view('page',compact('posts'))->with('categories',$categories);
        
    }
}
