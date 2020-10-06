<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\File;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('/pages/body-main', compact('posts'));
    }
    
    public function addPost(){
        return view('pages.addform');
    }

    public function addNewBlog(){
        return view('pages.newblog');
    }

    public function singlebBlog(Post $post){
        return view('pages.singleblog', compact('post'));
    }
    
    public function adminpanel(){
        $posts = Post::all();
        return view('pages.admin', compact('posts'));
    }

    public function delete(Post $post){
        $post->delete();
        return redirect('admin');
    }

    public function edit(Post $post){
        return view('pages.editblog', compact('post'));
    }
    
    public function postinu(Request $request){

        // dd(request('username'), request('blogname'), request('blogabout') );
        $path = $request->file('blogimage')->store('public/images');
        $filename = str_replace('public/', "", $path);   
        // php artisan storage:link PRIVALOMA PADARYTI
    Post::create([
            'username' => request('username'),
            'blogname' => request('blogname'),
            'blogabout'  => request('blogabout'),
            'blogcontent'  => request('blogcontent'),  
            'blogimage'  => $filename
        ]);

        return redirect('/');
    }

    public function updatinu(Request $request, Post $post){
    // $posts->update($request->all());
    // if ($request->file()) {
    //     File::delete(storage_path('app/public/' . $posts->blogimage));

    //     $path = $request->file('blogimage')->store('public/images');
    //     $filename = str_replace('public/', "", $path);   
    //     Post::where('id', $posts->getAttribute('id'))->update(['blogimage' => $filename]);
    // }
    Post::where('id', $post->getAttribute('id'))->update($request->except(['_token', 'blogimage'])); 

    return redirect('/');
    }
}
