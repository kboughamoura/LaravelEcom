<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    public function LignesCommandes (){
        return $this->hasMany(CommandLine::class,'command_id','id');    
    }

    public function Client ( ){
        return $this->belongsTo(User::class,'client_id','id');
    }
}
