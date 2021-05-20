<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahAdat extends Model
{
    //
    
    protected $table = 'rumah_adat';
    public function suku(){
    	return $this->belongsTo(Suku::class);
    }
}
