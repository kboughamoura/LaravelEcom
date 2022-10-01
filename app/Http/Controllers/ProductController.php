<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function ListProducts (){
        $products = Product::all();
        $categories= Category::all();
  
        return view('admin.products.list-products',)->with('products',$products)->with('categories',$categories);
      }

    public function AddProduct(Request $request){

  
        $request->validate([
          'name'=>'required',
      ]);

      $newname = uniqid();

      $image = $request->file('photo');
      $newname .= ".".$image->getClientOriginalExtension();
   
      $destinationPath = 'uploads';

      $image ->move($destinationPath,$newname);
      
      $p = new Product();
  
      $p->name= $request->name;
      $p->description=$request->description;
      $p->price=$request->price;
      $p->qte=$request->qte;
      $p->photo=$newname;
      $p->category_id=$request->category;
     
  
      $p->save();
  
      if($p)
        {return redirect('admin/product/list-products')->with('message','Successfully Added ');}
      else
        {return 'erreur d ajout';}
  
      }
  
    public function DeleteProduct($id){
        $product = Product::find($id);
        $product->delete(); 
        return redirect('admin/product/list-products')->with('message',"Successfully deleted");
       
        }
  
    public function UpdateProduct (Request $request){
  
      $request->validate([
        'name'=>'required',
        ]);
  
        $id = $request->id_product;
        $product= Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->qte = $request->qte;
        
        if($request->file('photo')){

          $file_path= public_path()."/uploads/".$product->photo;
          unlink($file_path);

          $newname = uniqid();

          $image = $request->file('photo');
          $newname=".".$image->getClientOriginalExtension();

          $destinationPath = 'uploads';
          $image ->move($destinationPath,$newname);
          
          $product->photo=$newname;


        }
            $product->update();
            if($product)
                {return redirect()->back();}
                    else
                {return 'erreur d ajout';}
  
    }
}
