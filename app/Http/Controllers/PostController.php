<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('/pages/body-main', compact('posts'));
    }
    
    public function addPost(){
        return view('pages.addform');
    }

    public function singlebBlog(){
        return view('pages.singleblog');
    }

    public function addNewBlog(){
        return view('pages.newblog');
    }

    public function postinu(){

        // dd(request('username'), request('blogname'), request('blogabout') );
        
        Post::create([
            'username' => request('username'),
            'blogname' => request('blogname'),
            'blogabout'  => request('blogabout'),
            'blogcontent'  => request('blogcontent'),  
            'imageid'  => request('imageid')           
        ]);
        return redirect('/');
    }
        
}
