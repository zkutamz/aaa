<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
   public function indexProperties(){
        $properties = DB::table('tbl_properties')->first();
        return view('admin.admin_properties',compact('properties'));
       
   }
}
