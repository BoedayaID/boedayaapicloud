<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    //
    
    protected $table = 'makanan';
    public function suku(){
    	return $this->belongsTo(Suku::class);
    }
}
