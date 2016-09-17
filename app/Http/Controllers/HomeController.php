<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=DB::table('posts')->latest('created_at')->where('status',1)->get();
        $post_numbers=DB::table('posts')->get()->count();   
        return view('home',compact('posts','post_numbers'));
     }
    
      public function addpost(Request $request){
          $user=Auth::user();
          $post = new Post();
          $post->post_content = $request->get('content');
          
          //uploading image
          $image = Input::file('image');
          $image_name=$user->id.$image->getClientOriginalName();
          $image->move(base_path() .'/public/images/PostImages', $image_name);
          $post->post_pic = $image_name;
          
          //post type for particular branch of authenticated user
          $post_type=DB::table('branchyear')->where('user_id','=',$user->id)->value('branch');
          $post->post_type = $post_type;
          
          $post->status='0';
          $user->post()->save($post);
          return redirect('home');
          
      }
}
