<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {   
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|max:50',
        ]);

        Category::create([
            'name' =>  $request->name,
            'parent_id' => $request->parent_id,
            'describe' => $request->describe,
        ]);

        session()->flash('success', '创建Category成功');
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $category->categories = Category::all();
        return view('admin.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->describe = $request->describe;

        $category->update();

        session()->flash('success', '更新Category成功');

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        session()->flash('success', '创建Category成功');
        return redirect()->back();
    }

}
