<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
