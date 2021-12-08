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
        $resorts->load("image");
        return view("admin.resort.list",compact('resorts'));
    }

    public function create() {
        $category = Category::all();
        return view("admin.resort.add-new",compact('category'));
    }

    public function insert(Request $request) {
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

    public function update(Request $request, $id) {
        

        $resort = Resort::find($id);
        $resort -> fill($request->all());
        $resort->save();

        $image = Image::find($resort->image_id);
        $image -> name = $request->name;
        $image -> path = $request->upFile;
        $image->save();
        
        return redirect()->route('store.resort');
    }

    public function delete(){
        
    }
}
