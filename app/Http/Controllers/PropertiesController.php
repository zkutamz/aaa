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
   public function updateProperties(Request $request){
      $property = DB::table('tbl_properties')->select('day_change_posts_show')->first();
      $data = array();
      $data['seo_title_min'] = $request->title_min;
      $data['seo_title_max'] = $request->title_max;
      $data['seo_description_min'] = $request->description_min;
      $data['seo_description_max'] = $request->description_max;
      $data['number_posts_show'] = $request->post_show;
      if($property->day_change_posts_show != $request->day_change_posts){
         $data['day_change_posts_show'] = $request->day_change_posts;
         $data['original_date'] = date("Y/m/d h:i:s");
         $data['change_date'] = date("Y-m-d h:i:s", strtotime("+".$request->day_change_posts." days"));
      }
      $data['updated_at'] = date("Y/m/d h:i:s");
      DB::table('tbl_properties')->update($data);
      return Redirect::to('properties');
   }
}
