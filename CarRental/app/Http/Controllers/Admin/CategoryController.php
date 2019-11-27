<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryIndex() {
        $categories = Category::all();
        $categoriesSelect = Category::where('id_parent', '0')->pluck('name', 'id');

        return view('admin.category', [
            'categories' => $categories,
            'categoriesSelect' => $categoriesSelect,
        ]);
    }

    public function editBrandParent(Request $request, $id) {
        $category = Category::where('id', $id)->first();
        $category->name = ($request->name_parent == null) ?  $request->name_children :$request->name_parent;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    public function registerCategory(Request $request) {
        $category = Category::create([
            'name' => $request->name,
            'id_parent' =>   $request->parent_id
        ]);

        return redirect()->route('admin.category.index');
    }
}
