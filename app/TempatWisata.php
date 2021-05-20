<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    //
    protected $table = 'tempat_wisata';
    public function suku(){
    	return $this->belongsTo(Suku::class);
    }
}
