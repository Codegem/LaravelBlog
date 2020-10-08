<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        // return view('/pages/body-main', compact('posts'));
        return view('/auth/login');
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

    try{
        $validatedData = $request->validate([
            'username' => 'required',
            'blogname' => 'required',
            'blogabout' => 'required',
            'blogcontent' => 'required',
            'blogimage' => 'mimes:jpeg, jpg, png, gif|required|max:10000'
        ]);
        // if(!empty($validatedData)){ po returno}
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
        return response()->json([
            'status' => 'success',
            'msg'    => 'Okay',
        ], 201);
    }
    catch(ValidationException $exception){
        return response() -> json([
            'status' => 'error',
            'msg'    => 'error',
        ], 201);
    }
    }

    public function updatinu(Request $request, Post $post){
    $post->update($request->all());
    if ($request->file()) {
        File::delete(storage_path('public/images' . $post->blogimage));

        $path = $request->file('blogimage')->store('public/images');
        $filename = str_replace('public/', "", $path);   
        Post::where('id', $post->getAttribute('id'))->update(['blogimage' => $filename]);
    }
    Post::where('id', $post->getAttribute('id'))->update($request->except(['_token','blogimage'])); 

    return redirect('/');
    }

}
