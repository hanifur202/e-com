<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use  Carbon\ Carbon;

class CategoryController extends Controller
{
    function CategoryList(){

        return view('backend.category.category_list', [
            'categorys' => Category::simplepaginate(5),
            'can_count' => Category::count(),

    ]);
    }

    function CategoryAdd(){
        return view('backend.category.category_from');
    }

    function CategoryPost(Request $request){
        $request->validate([
            'category_name' =>['required','min:3']
        ],[
            'category_name.required' =>'aho vatija',
            'category_name.min' =>'ato kom kano vatija',
        ]);
            // $cat = new Category;
            // $cat->Category_name = $request->category_name;
            // $cat->save();
            Category::insert([
                'category_name' =>$request->category_name,
                'created_at' => Carbon::now()
            ]);

        return redirect('admin/category-list')->with('success','category Added successfully');
    }
    function CategoryEdit($id){

        return view('backend.category.category_edit',[
            'category'=> Category::findOrFail($id),
        ]);
    }
    function CategoryUpdate(Request $request){
        // Category::findOrFail($request->category_id)->update([
        //     'category_name' =>$request->category_name,
        //     'upadte_at' => Carbon::now(),
        // ]);
       $category = Category::findOrFail($request->category_id);
       $category->category_name = $request->category_name;
       $category->save();
          
        
        return back();
    }
    function CategoryDelete($id){
    
        Category::findOrFail($id) ->delete();
        return back()->with('success','category Delete successfully');;
    }
}
 