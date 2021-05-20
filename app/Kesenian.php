<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kesenian extends Model
{
    //
    protected $table = 'kesenian';
    
    public function suku(){
    	return $this->belongsTo(Suku::class);
    }
}
