<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('home');
    }

    public function showblog()
    { 
        $blogs = Blog::all();

        /*foreach ($blogs as $blog) {
            echo $blog->title;
            echo $blog->image;
            echo $blog->description;
            echo $blog->created_at;
        }
        */
        return view('blogs.create')->with(array('blogs'=>$blogs));
    }

    public function addblog()
    { 
        return view('blogs.addblog');

    }
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        Blog::create(request(['title', 'image', 'description']));

        return redirect()->to('/blog');
      
    }

    public function showListing()
    { 
        $blogs = Blog::all();
        return view('blogs.showlist')->with(array('blogs'=>$blogs));
    }

    public function editblog($id)
    {
        $blogbyid = Blog::where('blog_id', $id)->first();
        // echo $blogbyid;
         return view('blogs.editblog')->with(array('blogs'=>$blogbyid));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        // exit;
        Blog::where('blog_id', $request->blog_id)
          ->update(['title' => $request->title,
                    'image'=> $request->image,
                    'description'=>$request->description
                ]);
        return redirect()->to('/showblog');
      
    }

     public function delete(Request $request)
    {
        Blog::where('blog_id', $request->blog_id)->delete();
        return redirect()->to('/showblog');
      
    }

}
