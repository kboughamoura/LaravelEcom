<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function AddProduct(){

        return view('admin.products.AddProduct');
    }

    public function ListCategories (){
      
    }

    public function Profile (){
        $user = Auth::user();

        return view('admin.profile')->with('user',$user);
    }

    public function UpdateProfile(Request $request){
        $user = Auth::user();
        $user->name= $request->name;
        $user->email= $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
      // $user->update();

        return redirect('/admin/dashboard');
    }



   // public function AddCategory(){

   // }

    
}
