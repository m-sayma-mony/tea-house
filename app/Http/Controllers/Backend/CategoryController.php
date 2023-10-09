<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

// create function    
    public function create(){
        return view('backend.category.create');
    }

// store function    
    public function store(Request $r){
        $r->validate([
            'name' => 'required | max: 30',
            'description' => 'max: 100',
            'image' => 'image',
        ], [
            'name.required' => 'Please give a category name',
            'name.max' => 'Please give the category name must be less than 30 character',
            'description.max' => 'Please give the category description must be less than 100 character',
        ]);

        $category = new Category();
        $category->name = $r->name;
        $category->description = $r->description;
        
        $image = $r->image;
        if($image){
            $path = 'category-images/';
            $imageName = 'category-image'.time().rand().'.'.$image->extension();

            $image->move($path, $imageName);
            $category->image = $path.$imageName;
        }

        $category->save();

        return back()->with('message', 'Category Added Successfully');
    }

// manage function    
    public function manage(){
        $category = Category::all();
        return view('backend.category.manage', ['categories' => $category]);
    }    

// edit function  
    public function edit(int $id){
        $category = Category::find($id);
        return view('backend.category.edit', ['categories' => $category]);
    }

// update function
    public function update(Request $r, $id){
        $category = Category::find($id);
        $category->name = $r->name;
        $category->description = $r->description;
        $image = $r->image;
        if($image){
            if(file_exists($category->image)){
                unlink($category->image);
            }
            $path = 'category-images/';
            $imageName = 'category-image'.time().rand().'.'.$image->extension();

            $image->move($path, $imageName);
            $category->image = $path.$imageName;
        }
        $category->save();

        return redirect('admin/category/manage');
    } 
    
// destroy function    
    public function destroy(int $id){
        $category = Category::find($id);

        if($category->image){
            if(file_exists($category->image)){
                unlink($category->image);
            }
        }

        $category->delete();

        return back()->with('message', 'Category Delete Successfully');
    }
}
