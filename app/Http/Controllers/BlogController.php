<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogs;
    public function index(){
        return view('blog.add-blog');
    }
    public function create(Request $request){
        Blog::createBlog($request);
        return back()->with("message","Blog Inserted Successfully");
    }
    public function manage(){
        $this->blogs = Blog::all();
        return view('blog.manage',["blogs"=>$this->blogs]);
    }
}
