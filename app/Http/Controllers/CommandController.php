<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Command;
use App\Models\CommandLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{
    public function cart(){
        $categories=Category::all();
        $command = Command::where('client_id',Auth::user()->id)->where('status','loading')->first();

        return view('client.shopping-cart')->with('categories',$categories)->with('command',$command);
    }

    public function AddCommand (Request $request){
        
        //Vérifier si une commande est en cours 
        if($command = Command::where('client_id',Auth::user()->id)->where('status','loading')->first()){
        $exist = false;
        foreach($command->LignesCommandes as $cl){
        if($cl->product_id == $request->product){
            $exist = true;
            $cl->qte += $request->qte;
            $cl->update();
        }
        }

        if($exist){
            //Creation Ligne Commande 
        $commandline = new CommandLine();
        $commandline->product_id = $request->product;
        $commandline->qte=$request->qte;
        $commandline->command_id = $command->id;
        $commandline->save();
    
        }

        return redirect('/client/cart');

        }else{


        //Creation commande
        $command = new Command();
        $command->client_id = Auth::user()->id;
        if($command->save()){
        

        //Creation Ligne Commande 
        $commandline = new CommandLine();
        $commandline->product_id = $request->product;
        $commandline->qte=$request->qte;
        $commandline->command_id = $command->id;
        $commandline->save();
        return redirect('/client/cart');

        

        }else{
            return redirect()->back()->with('errorr','error creating the command');
        }
        }




    }

    public function DestroyLCommand($id){
        $lc = CommandLine::find($id);
        $lc->delete();
        return redirect()->back();

    }
}
