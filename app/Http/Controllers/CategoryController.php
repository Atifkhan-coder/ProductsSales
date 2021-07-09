<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//Create Categories...
    public function create()
    {
        return view('category');
    }
//Store Category data...
    public function store(Request $req)
    {
        $this->validate($req,[
            'name' => 'required|min:3|unique:categories,name'
        ]);
        $data = new Category;
        $data->name = $req->name;
        $data->save();

        return redirect('AddProduct')->with('success','Category Added Successfully');
    }
//Show Categories....
    public function show($id)
    {
        $category = Category::find($id);
        return view('catshow',compact('category'));
    }
//Edit Category....

}
