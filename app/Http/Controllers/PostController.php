<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class PostController extends Controller
{
    public function addPosts(Request $request){
        $data = array();
        $data['title'] = $request->posts_name;
        $data['description']  = $request->posts_name;
        $data['category_id']  = $request->cat_id;
        $data['link']  = $request->post_link;
        
        $data['created_at'] = date("Y/m/d H:i:s");
        $data['updated_at'] = date("Y/m/d H:i:s");
        $get_image = $request->file('avatar');
        if($get_image){
            $get_image_name = $get_image->getClientOriginalName();
            $image_name = current(explode('.',$get_image_name));
            $new_image = $image_name .date("Y").date("m").date("d").date("H").date("i").date("s").'.'.$get_image->getClientOriginalExtension();
            $get_image->move("public/backend/images/posts/",$new_image);
            $data["img"] = $new_image;
        }
        DB::table('tbl_post')->insert($data);

        Session::put('message','Thêm danh mục thành công.');
        return Redirect::to('posts');
    }
    public function updatePosts(Request $request){
        $dateTimeUpdate = date("Y/m/d H:i:s");
        //DB::table('tbl_categories')->where('id',$request->cat_id)->update(['updated_at'=>$dateTimeUpdate,'name'=>$request->cat_name]);

        return Redirect::to('posts');
        
    }
}
