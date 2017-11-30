<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Url;
use App\Category;
use App\Post;
use Auth;

class BlogController extends Controller
{
    public function blog()
    {
        $categories = Category::all();
        return view('blog.blog', ['categories' => $categories]);
    }

    public function addBlog(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required'
        ]);
        $blog = new Post;
        $blog->title = $request->input('title');
        $blog->user_id = Auth::user()->id;
        $blog->content = $request->input('content');
        $blog->category_id = $request->input('category_id');

        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file -> move(public_path(). '/blogs/',
                $file->getClientOriginalName());
            $url = URl::to("/") . '/blogs' .
                $file->getClientOriginalName();
        }

        $blog->image = $url;
        $blog->save();
        return redirect('/home')->
            with('response', 'Blog Successfully Added');


    }
}
