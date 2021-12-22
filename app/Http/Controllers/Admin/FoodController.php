<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use App\Models\Image;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $data = Food::all();
        $data->load("category");
        return view('admin.food.list', compact('data'));
    }

    public function create(){
        $category = Category::all();
        return view('admin.food.add-new',compact('category'));
    }

    public function saveNew(Request $request){
        $request->validate([
            'title' =>'required|unique:food',
            'price' =>'required',
            'upFile' =>'required',
        ],
        [
            'title.required' => 'không được bỏ trống',
            'title.unique' => 'Tên thực đơn đã tồn tại',
            'price.required' => 'không được bỏ trống',
            'upFile.required' => 'không được bỏ trống',
            ]
    
    );

        $pathImg = $request->file('upFile')->store('public/images');
        $model = new Food();
        $model -> fill($request->all());
        $model -> image = str_replace('public/','',$pathImg); 
        $model->save();
        return redirect()->route('food-list');
    }

    public function edit($id){
        $category = Category::all();
        $food = Food::find($id);
        return view('admin.food.update',compact('category','food'));
    }

    public function saveEdit(Request $request, $id){
        $request->validate([
            'title' =>'required|unique:food,title,'.$id,
            'price' =>'required',
            'category_id' =>'required'
        ],
        [
            'title.required' => 'không được bỏ trống',
            'title.unique' => 'Tên thực đơn đã tồn tại',
            'price.required' => 'không được bỏ trống',
            'category_id.required' => 'không được bỏ trống'
        ]
    
        );
        $model = Food::find($id);
        if($request->has('upFile')){
            $pathImg = $request->file('upFile')->store('public/images');
            $model -> image = str_replace('public/','',$pathImg);
        }

        $model->fill($request->all());
        $model->save();

        return redirect()->route('food-list');

    }

    public function remove($id){
        Food::destroy($id);
        return redirect()->route('food-list');
    }
}
