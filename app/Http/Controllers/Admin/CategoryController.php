<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resort;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.category.list',compact('data'));
    }

    public function create()
    {
        return view('admin.category.add-new');
    }

    public function saveNew(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:category'
            ],
            [
                'name.required' => 'Không được để trống',
                'name.unique' => 'Danh mục đã tồn tại'
            ]
        );

        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category-list');
    }

    public function edit($id)
    {
        $cate = Category::find($id);
        return view('admin.category.update', compact('cate'));
    }

    public function saveEdit(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|unique:category,name,'.$id
            ],
            [
                'name.required' => 'Không được để trống',
                'name.unique' => 'Danh mục đã tồn tại'
            ]
        );
        Category::find($id)->update([
            'name'=>$request->name
        ]);

        return redirect()->route('category-list');
    }

    public function remove($id)
    {   
        $resorts = Resort::all()->where('category_id',$id);
        foreach($resorts as $resort){
            $resort->update([
                'category_id'=> 1
            ]);
        }
        Category::destroy($id);
        return redirect()->route('category-list');
    }
}
