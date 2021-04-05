<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\tbl_post;






class IndexController extends Controller
{

    public function loadIndex(Request $request){
        $propreties = BBD::table('tbl_propreties')->first();
        $DayName = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
        $arr =  DB::table('tbl_category')->select('categories.name')->get();
        //$arr = ['VEHICLES','WATCHES & JEWELLERY','LIFESTYLE','STYLE','SPACES','MONEY','ROBB SOCIETY'];
        ///////
        $brands = DB::table('tbl_brand')->get();
        $categories = DB::table('tbl_categories')->get();
        
          //--------You might also like
          $NumbersYouMightAlsoLike = 2;
          $youMightAlsoLike = DB::table('tbl_post')->select('tbl_post.*','tbl_categories.name','tbl_brand.brand_name')
            ->join('tbl_categories', function ($join) {$join->on('tbl_post.category_id', '=', 'tbl_categories.id');})
            ->join('tbl_brand', function ($join) {$join->on('tbl_post.brand_id', '=', 'tbl_brand.brand_id');})
            ->orderBy('tbl_post.created_at', 'desc')->offset(0)->limit($NumbersYouMightAlsoLike)->get();
        
          //--------You might also like

          //--------More Stories
            $MoreStories =  DB::table('tbl_post')->select('tbl_post.*','tbl_categories.name','tbl_brand.brand_name')
            ->join('tbl_categories', function ($join) {$join->on('tbl_post.category_id', '=', 'tbl_categories.id');})
            ->join('tbl_brand', function ($join) {$join->on('tbl_post.brand_id', '=', 'tbl_brand.brand_id');})
            ->orderBy('tbl_post.created_at', 'desc')->get();
          //--------More Stories

        //------Slide Show
        //Lấy bài viết đã đăng ký
        $FirstSilde = DB::table('tbl_post')->select('tbl_post.*','tbl_categories.name')->join('tbl_categories', function ($join) {
            $join->on('tbl_post.category_id', '=', 'tbl_categories.id');
        })->where('tbl_post.level','3')
        ->orderBy('tbl_post.created_at', 'desc')
        ->offset(0)->limit($properties->number_posts_show)->get();
        //Lấy thêm 1 số bài viết
        if(count($FirstSilde) < $properties->number_posts_show){
          $day = "".date("D");
          $i = 0;
        
          for($i; $i < count($DayName); $i++){
              if($day == $DayName[$i]) break;
          }
          if($i > count($arr))
            $i = $i%count($arr);
              $EndSilde =  DB::table('tbl_post')->select('tbl_post.*','tbl_categories.name','tbl_brand.brand_name')
              ->join('tbl_categories', 'tbl_post.category_id', '=', 'tbl_categories.id')
              ->join('tbl_brand', 'tbl_post.brand_id', '=', 'tbl_brand.brand_id')
              ->where('tbl_categories.name',$arr[$i])
              ->where('tbl_post.level','<>','3')
              ->orderBy('tbl_post.created_at', 'desc')->offset(0)->limit($NumbersSlideShow-1)->get();
          
          return view('pageLayout',compact('properties','categories','brands'))->with('firstSlide',$FirstSilde)->with('endSlide',$EndSilde)->with('moreStories',$MoreStories)->with('youMightAlsoLike',$youMightAlsoLike);
        }
        
        //--------Slide Show
        
    	return view('pageLayout',compact('properties','categories','brands'))->with('firstSlide',$FirstSilde)->with('moreStories',$MoreStories)->with('youMightAlsoLike',$youMightAlsoLike);
        
    }
}
 
