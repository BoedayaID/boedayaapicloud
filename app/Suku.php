<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suku extends Model
{
    //
    
    protected $table = 'suku';

    public function provinsi(){
    	return $this->belongsTo(Provinsi::class);
    }
    
}
