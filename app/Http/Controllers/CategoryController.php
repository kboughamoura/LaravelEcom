<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function ListCategories (){
      $categories = Category::all();

      return view('admin/categories/list-categories')->with('categories',$categories);
    }

    public function ShowCategoryForm(){
      return view('admin/categories/add-category');
    }

    



    public function AddCategory(Request $request){

      $request->validate([
        'name'=>'required',
    ]);

    $c = new Category();

    $c->name= $request->name;
    $c->description=$request->description;

    $c->save();

    if($c)
      {return redirect('admin/category/list-categories')->with('message','Successfully Added ');}
    else
      {return 'erreur d ajout';}

    }

    public function DeleteCategory($id){
      $categorie = Category::find($id);
      $categorie->delete(); 
      return redirect('admin/category/list-categories')->with('message',"Successfully deleted");
     
  }

  public function UpdateCategory (Request $request){

    $request->validate([
      'name'=>'required',
  ]);

  $id = $request->id_category;
  $category= Category::find($id);
  $category->name = $request->name;
  $category->description = $request->description;
  $category->update();
  if($category)
      {return redirect()->back();}
    else
      {return 'erreur d ajout';}

}

    
}
