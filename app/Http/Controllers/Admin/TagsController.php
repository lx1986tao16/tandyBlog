<?php

namespace App\Http\Controllers\Admin;

use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tags::all();
        return view('admin.tags.list', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|max:255',
        ]);

        Tags::create([
            'name' => $request->name,
        ]);

        session()->flash('success', '创建Tag成功！');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $tag = Tags::findOrFail($id);
        $tag->delete();

        session()->flash('success', '删除tag成功');
        return redirect()->back();
    }
}
