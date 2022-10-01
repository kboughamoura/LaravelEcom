<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;

class GuestController extends Controller
{
    public function Home (){

        $products = Product::all();
        $categories= Category::all();
  
        return view('guest.home',)->with('products',$products)->with('categories',$categories);
      }

      public function shop (){
        $products = Product::all();
        
        $categories = Category::all();
        return view('guest.shop')->with('products',$products)->with('categories',$categories);
      }

      public function shopCat ($idcategory){
        $products = Product::all();
        $productsCat = Product::where('category_id','=',$idcategory)->get();
        $categories = Category::all();
        return view('guest.shop-cat')->with('categories',$categories)->with('productsCat',$productsCat);
      }

    public function ProductDetails($id){
      $categories= Category::all();
      $reviews = Review::where('product_id','=',$id)->get();
      $products = Product::where('id','!=',$id)->get();
      $wanted = Product::find($id);
        return view('guest.product-details')->with('categories',$categories)->with('wanted',$wanted)->with('products',$products)->with('reviews',$reviews);
    }

    public function search (Request $request){
      $products = Product::where('name','LIKE','%'.$request->keyword.'%')->get();
      $categories = Category::all();
      return view('guest.shop')->with('products',$products)->with('categories',$categories);
    }
    
}
