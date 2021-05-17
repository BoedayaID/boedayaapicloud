<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    
    protected $table = 'provinsi';
    
    public function pulau(){
    	return $this->belongsTo(Pulau::class);
    }
    
    public function suku(){
    	return $this->hasMany(Suku::class);
    }
}
