<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index() {
        $categories = Category::get();
    return view('categories.list',['categories' => $categories]);
  } 
   
  public function create(){
        return view('categories.new');
  }
  public function store(Request $request){
        $category = new Category();
        $category->title =$request->title;
        $category->save();
        return redirect('/');
      
}
 public function edit($id){
        $category = Category::where('id', $id)->first();
        return view('categories.edit',compact('category'));   

 } 
  
 public function update (Request $request,$id){
        echo $id;
        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect('/');

 }
 public function delete ($id)
 {
    $category = Category::where('id', $id)->first();
    $category->delete();
    return redirect('/');
 }
}
