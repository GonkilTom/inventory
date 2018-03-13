<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public function index()
    {
        return view('add_to_stock.index');
    }


    public function create()
    {
        $categories = Category::paginate(10);
        return view('categories.index', compact('categories'));
    }


    public function store(CategoryRequest $request)
    {
        // This validation is redundant as it is already taken care of in CategoryRequest file.
        // $this->validate($request,[
        //   'category_name' => 'required',
        // ]);

          $category = new Category;
          $category->category_name = $request->input('category_name');
          $category->save();

      return redirect::route('categories.create')->with('success' , 'Category Created');
         // return redirect('/categories/create')->with('success' , 'Category Created');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'category_name' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/categories/create')->with('success' , 'Category updated');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/categories/create')->with('success' , 'Category Deleted');
    }

    public function display()
    {
      // $categories = Category::paginate(10);
      // $categories = Category::all();
      return view('categories.index', compact('categories'));
    }
}
