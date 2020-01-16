<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // public function show($slug){
    //   $post= \DB::table('post')->where('slug',$slug)->first();
    // }
    // dd($post);

    public function index(){
      return "hello, you are authenticated.";
    }
}
