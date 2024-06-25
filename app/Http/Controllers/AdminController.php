<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view("admin.view_category", compact("data"));
    }

    public function add_category(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;

        $category->save();
        toastr()->success('New Category Created Successfully!');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->warning('Category Deleted Successfully!');
        return redirect()->back();
    }
}
