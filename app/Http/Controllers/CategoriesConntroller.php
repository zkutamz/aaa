<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class CategoriesConntroller extends Controller
{
    public function addCategories(Request $request){
        $data = array();
        $data['name'] = $request->cat_name;
        $data['created_at'] = date("Y/m/d H:i:s");
        $data['updated_at'] = date("Y/m/d H:i:s");
        DB::table('tbl_categories')->insert($data);

        Session::put('message','Thêm danh mục thành công.');
        return Redirect::to('categories');
    }
    public function updateCategories(Request $request){
        $dateTimeUpdate = date("Y/m/d H:i:s");
        DB::table('tbl_categories')->where('id',$request->cat_id)->update(['updated_at'=>$dateTimeUpdate,'name'=>$request->cat_name]);

        return Redirect::to('categories');
        
    }
    public function deleteCategories($category_id){
        //$dateTimeUpdate = date("Y/m/d H:i:s");
        if(DB::table('tbl_post')->where('category_id',$category_id)->first()){
            $name = DB::table('tbl_categories')->where('id',$category_id)->first();
            Session::put('massege','Không thể xóa danh mục "'.$name->name.'".');
        }
        else{
            DB::table('tbl_categories')->where('id',$category_id)->delete();
            Session::put('massege','Xoá danh mục thành công.');
        }
        return Redirect::to('categories');
        
    }
}
