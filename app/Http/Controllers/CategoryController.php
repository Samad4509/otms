<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function Illuminate\Validation\message;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message',"Category Added Successfully");
    }

    public function manage()
    {
        return view('admin.category.manage',['categories'=>Category::all(),]);
    }
    public function edit($id)
    {
        return view('admin.category.edit',['categories'=>Category::find($id),]);
    }
    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('category/manage')->with('message','Update Success');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('category/manage')->with('message','Delete Success');
    }
}
