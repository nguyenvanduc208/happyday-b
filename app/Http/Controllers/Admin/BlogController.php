<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::all();
        return view('admin.blog.list', compact('data'));
    }

    public function create(){
        return view('admin.blog.add-new');
    }

    public function saveNew(Request $request){
        $request->validate([
            'title' =>'required|unique:blog',
            'desc' =>'required'
        ],
        [
            'title.required' => 'không được bỏ trống',
            'title.unique' => 'Tiêu đề đã đã tồn tại',
            'desc.required' => 'không được bỏ trống',
            ]
    
    );
        Blog::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('blog-list');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog.update', compact('blog'));
    }

    public function saveEdit(Request $request , $id){
        $request->validate([
            'title' =>'required|unique:blog,title,'.$id,
            'desc' =>'required'
        ],
        [
            'title.required' => 'không được bỏ trống',
            'title.unique' => 'Tiêu đề đã đã tồn tại',
            'desc.required' => 'không được bỏ trống',
            ]
    
    );
        $blog = Blog::find($id);
        $blog->fill($request->all());
        $blog->save();

        return redirect()->route('blog-list');
    }

    public function remove($id)
    {
        Blog::destroy($id);
        return redirect()->route('blog-list');
    }
}
