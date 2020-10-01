<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('/pages/body-main');
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

        dd(request('username'));
        Post::create([
            'username' => request('username'),
            'blogname' => request('blogname'),
            'blogabout'  => request('blogabout'),
            'blogcontent'  => request('blogcontent'),  
            'imageid'  => request('imageid'),            
            'user_id' => auth()->id()
        ]);
        return redirect('/');
    }
        
}
