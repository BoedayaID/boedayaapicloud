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
    
    public function kesenian(){
    	return $this->hasMany(Kesenian::class);
    }
     public function tempat_wisata(){
    	return $this->hasMany(TempatWisata::class);
    } 
    public function rumah_adat(){
    	return $this->hasMany(RumahAdat::class);
    }
    public function makanan(){
    	return $this->hasMany(Makanan::class);
    }
}
