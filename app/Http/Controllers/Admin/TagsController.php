<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.list', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|max:255|unique:tags',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);

        session()->flash('success', '创建Tag成功！');
        return redirect()->back();
    }

    public function edit($id)
    {
        $tags = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tags'));
    }

    public function update($id, Request $request)
    {
        $tags = Tag::findOrFail($id);
        $tags->name = $request->name;
        $tags->update();

        session()->flash('success', 'Tag更新成功');
        return redirect()->route('tags.index');
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        session()->flash('success', '删除tag成功');
        return redirect()->back();
    }

    public function getTags()
    {
        $tags = Tag::all();
        $tags_data = [];
        foreach ($tags as $tag) {
            array_push($tags_data, [
                "value" => $tag->id,
                "text" => $tag->name,
            ]);
        }

        return response()->json($tags_data);
    }
}
