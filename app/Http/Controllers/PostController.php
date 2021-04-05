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
        $data['title'] = $request->post_title;
        $data['description']  = $request->post_desc;
        $data['category_id']  = $request->cat_id;
        $data['brand_id'] = $request->brand_id;
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
        else{
            $data["img"] = '';
        }
        DB::table('tbl_post')->insert($data);
        Session::put('message','Thêm bài viết thành công.');
        return Redirect::to('posts');
    }
    public function updatePosts(Request $request){
        $data = array();
        $data['title'] = $request->post_title;
        $data['description']  = $request->post_desc;
        $data['category_id']  = $request->cat_id;
        $data['brand_id'] = $request->brand_id;
        $data['link']  = $request->post_link;
        $data['updated_at'] = date("Y/m/d H:i:s");
        $get_image = $request->file('avatar');
       
        if($get_image){
            $get_image_name = $get_image->getClientOriginalName();
            $image_name = current(explode('.',$get_image_name));
            $new_image = $image_name .date("Y").date("m").date("d").date("H").date("i").date("s").'.'.$get_image->getClientOriginalExtension();
            $get_image->move("public/backend/images/posts/",$new_image);
            $data["img"] = $new_image;
            DB::table('tbl_post')->where('id',$request->post_id)
            ->update(['title'=>$data['title'],
                    'description'=>$data['description'],
                    'category_id'=>$data['category_id'],
                    'brand_id'=>$data['brand_id'],
                    'link'=>$data['link'],
                    'img'=>$data['img'],
                    'updated_at'=>$data['updated_at']]);
            Session::put('message','Cập nhật bài viết thành công.');
            return Redirect::to('posts');
        }
        DB::table('tbl_post')->where('id',$request->post_id)
        ->update(['title'=>$data['title'],
                    'description'=>$data['description'],
                    'category_id'=>$data['category_id'],
                    'brand_id'=>$data['brand_id'],
                    'link'=>$data['link'],
                    'updated_at'=>$data['updated_at']]);
        Session::put('message','Cập nhật bài viết thành công.');
        return Redirect::to('posts');
    }

    public function deletePosts($post_id){
        
        DB::table('tbl_post')->where('id',$post_id)->delete();
        return Redirect::to('posts');
    }


}
