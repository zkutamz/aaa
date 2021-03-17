<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();


class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    public function dashBoard(){
        $check = Session::get('admin_active');
        if($check == '1'){
            return view('admin.admin_layout');
        }
        else{
            return Redirect::to('/admin');
          //  return view('admin.admin_login');
        }
    }
    public function login(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->first();
        if($result){
            if($result->active == 0){
                $result->active = 1;
                DB::table('users')->where('email',$admin_email)->where('password',$admin_password)->update(['active'=>1]);
                Session::put('admin_name',$result->name);
                Session::put('admin_email',$result->email);
                Session::put('admin_active',$result->active);
                return Redirect::to('/adminDashBoard');
            }
            else{
                Session::put('massege','Tài khoản hiện đang được sử dụng.');
                return Redirect::to('/admin');
            }
        }else{
            Session::put('massege','Mật khẩu hoặc tài khoản sai. Vui lòng nhập lại.');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        DB::table('users')->where('email',Session::get('admin_email'))->update(['active'=>0]);
        Session::put('admin_email',null);
        Session::put('adminn_active',null);
        Session::put('admin_name',null);
        Session::put('massege',null);
        Session::put('page',null);
        
        return Redirect::to('/admin');
    }
    public  function  showCategories(){
        $check = Session::get('admin_active');
        if($check == 1){
            $data = DB::table('tbl_categories')->get();
            
            $manager_categories = view('admin.admin_categories')->with('categories',$data);
            return view('layout')->with('admin.admin_categories',$manager_categories);
        }
        else{
            return Redirect::to('/admin');
        }
    }
    public  function  showPosts(){
        $check = Session::get('admin_active');
        if($check == 1){
        $data = DB::table('tbl_post')->get();
        $dateCat = DB::table('tbl_categories')->get();
        $manager_post = view('admin.admin_post')->with('posts',$data)->with('categories',$dateCat);
        return view('layout')->with('admin.admin_post',$manager_post);
        }
        else{
            return Redirect::to('/admin');
        }
    }
}
