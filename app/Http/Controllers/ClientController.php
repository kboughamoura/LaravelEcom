<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function AddReview(Request $request){

        //dd($request);
       $review = new Review();
        $review->rate = $request->rate;
        $review->content = $request->content;
        $review->product_id = $request->product_id;
        $review->user_id = Auth::user()->id;

        $review->save();

        return redirect()->back();

    }

}
