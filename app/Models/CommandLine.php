<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    use HasFactory;

    public function Command (){
        return $this->belongsTo(Command::class,'command_id','id');
    }

    public function Produit(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
