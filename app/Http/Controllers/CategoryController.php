<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index() {

        $listCategories=Category::all();
        return view('category.index', ['categories' =>$listCategories]);
     }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        //dd($request->all());

        $myCategory = new Category();
        $myCategory->label = $request->label;
        $myCategory->show = $request->show ? 1 : 0;

        $myCategory->save();

        return redirect('/category');

    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }

  //ceci juste une petite demo
    public function update($id) {
        return $id;
    }
}
