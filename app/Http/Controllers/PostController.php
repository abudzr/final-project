<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except('index');
    }
    public function create()
    {
        return view("create");
    }
    
    public function store(Request $request)
    {
        $post=Post::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/post')->with('success','Pertanyaan Berhasil Diperbaharui');
    }

    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show($id){
      
        $post= Post::find($id);
        return view('show',compact('post'));
    }

    public function edit($id){
        // $post = DB::table('pertanyaan')->where('id', $id)->first();
        $post= Post::find($id);
        return view('edit', compact('post'));
    }
    public function update($id, Request $request){

    $update = Post::where('id', $id)->update([
        'judul' =>$request['judul'],
        'isi' =>$request['isi']
    ]);
        return redirect('/post')->with('success','Berhasil Update post');
    }

    public function destroy($id){
       

        Post::destroy($id);
        return redirect('/post')->with('success','Post Berhasil di Delete!');
    }
    
}
