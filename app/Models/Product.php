<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';

    //cle etrangére
    public function category (){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    
    public function reviews ()  {
        return $this->hasMany(Review::class, 'product_id','id');
    }

    public function CommandLine (){
        return $this->hasOne(CommandLine::class,'product_id','id');
    }
}
