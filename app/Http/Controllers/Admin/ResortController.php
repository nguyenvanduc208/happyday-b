<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    public function index(){
        $resorts = Resort::all();
        $resorts->load("image","category");

        dd($resorts[0]->image);
        return view("admin.resort.list",compact('resorts'));
    }

    public function create() {
        $category = Category::all();
        return view("admin.resort.add-new",compact('category'));
    }

    public function saveNew(Request $request) {
        $request->validate([
            'name' =>'required|unique:resort',
            'price' =>'required',
            'limit' =>'required',
            'bed' =>'required',
            'size' =>'required',
            'category_id' =>'required',
            'upFile' =>'required',
            'desc' =>'required'
        ],
        [
            'name.required' => 'không được bỏ trống',
            'name.unique' => 'Tên resort đã tồn tại',
            'price.required' => 'không được bỏ trống',
            'limit.required' => 'không được bỏ trống',
            'bed.required' => 'không được bỏ trống',
            'size.required' => 'không được bỏ trống',
            'category_id.required' => 'không được bỏ trống',
            'upFile.required' => 'không được bỏ trống',
            'desc.required' => 'không được bỏ trống',
            ]
    
    );

        $pathImg = $request->file('upFile')->store('public/images');
        $image = new Image();
        $image -> name = $request->name;
        $image -> path = str_replace('public/','',$pathImg);
        $image->save();

        $resort = new Resort();
        $resort -> fill($request->all());
        $resort -> image_id = $image->id;
        $resort->save();
        return redirect()->route('resort-list');
    }

    public function remove($id) {
        Resort::destroy($id);
        return redirect()->back();
   }

    public function edit($id){
        $category = Category::all();
        $resort = Resort::find($id);
        return view("admin.resort.update",compact('category', "resort"));
    }

    public function saveEdit(Request $request, $id) {
        $request->validate([
            'name' =>'required|unique:resort,name,'.$id,
            'price' =>'required',
            'limit' =>'required',
            'bed' =>'required',
            'size' =>'required',
            'category_id' =>'required',
            'desc' =>'required'
        ],
        [
            'name.required' => 'không được bỏ trống',
            'name.unique' => 'Tên resort đã tồn tại',
            'price.required' => 'không được bỏ trống',
            'limit.required' => 'không được bỏ trống',
            'bed.required' => 'không được bỏ trống',
            'size.required' => 'không được bỏ trống',
            'category_id.required' => 'không được bỏ trống',
            'desc.required' => 'không được bỏ trống',
            ]
    
    );
        $resort = Resort::find($id);
        if($request->has('upFile')){
            $pathImg = $request->file('upFile')->store('public/images');
            $image = new Image();
            $image -> name = $request->name;
            $image -> path = str_replace('public/','',$pathImg);
            $image->save();
            $resort -> image_id = $image->id;

        }
        
        $resort -> fill($request->all());
        $resort->save();

        return redirect()->route('resort-list');
    }

}
