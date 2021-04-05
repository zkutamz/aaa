<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    public function addBrand(Request $request){
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['created_at'] = date("Y/m/d H:i:s");
        $data['updated_at'] = date("Y/m/d H:i:s");
        DB::table('tbl_brand')->insert($data);

        Session::put('message','Thêm thương hiệu thành công.');
        return Redirect::to('brands');
    }
    public function updateBrand(Request $request){
        $dateTimeUpdate = date("Y/m/d H:i:s");
        DB::table('tbl_brand')->where('brand_id',$request->brand_id)->update(['updated_at'=>$dateTimeUpdate,'name'=>$request->brand_name]);

        return Redirect::to('brands');
        
    }
    public function deleteBrand($category_id){
        //$dateTimeUpdate = date("Y/m/d H:i:s");
        if(DB::table('tbl_post')->where('brand_id',$brand_id)->first()){
            $name = DB::table('tbl_brand')->where('brand_id',$brand_id)->first();
            Session::put('massege','Không thể xóa thương hiệu "'.$name->name.'".');
        }
        else{
            DB::table('tbl_brands')->where('brand_id',$brand_id)->delete();
            Session::put('massege','Xoá thương hiệu thành công.');
        }
        return Redirect::to('brands');
        
    }
}
