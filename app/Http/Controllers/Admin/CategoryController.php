<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Traits\ImageUploading;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageUploading;


    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    
    public function create()
    {
        $categories = Category::whereNull('category_id')->pluck('name', 'id');

        return view('admin.categories.create', compact('categories'));
    }

    
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());

        if ($request->input('photo', false)) {
            $category->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))
            ->toMediaCollection('photo');
        }
        return redirect()->route('categories.index')->with([
            'message'=>'New Category Success Created',
            'type'=>'success' 
        ]);
    }


    
    public function edit(Category $category)
    {
        $categories = Category::whereNull('category_id')->pluck('name', 'id');

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        if($request->input('photo', false)){
            if(!$category->photo || $request->input('photo') !== $category->photo->file_name){
                isset($category->photo) ? $category->photo->delete() : null;
                $category->addMedia(storage_path('tmp/uploads/') . $request->input('photo'))->toMediaCollection('photo');
            }
        }else if($category->photo){
            $category->photo->delete();
        }

        return redirect()->route('categories.index')->with([
            'message' => 'Success Updated !',
            'type' => 'info'
        ]);
    }

    
    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with([
            'message'=>'Deleted Category Successfully',
            'type'=>'danger' 
        ]);
    }
}
