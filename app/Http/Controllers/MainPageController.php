<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MainPageController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();



        return view('main.index', compact('posts'));
    }

    public function show($id)
    {


        $post = Post::find($id);

        return view('main.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
           'title' => 'required',
           'body' => 'required',
            'category' => 'required'
        ]);

        if(Input::hasFile('image')){
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('/uploads'), $imageName);
            Post::create([
                'title' => request('title'),
                'body' => request('body'),
                'category' => request('category'),
                'image' => $imageName
            ]);
        }else{
            Post::create([
                'title' => request('title'),
                'body' => request('body'),
                'category' => request('category')
            ]);}

        return redirect('/');
    }
}
