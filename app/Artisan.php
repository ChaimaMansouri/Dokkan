<?php

namespace App;



class Artisan extends Model
{
   public function produits()
   {
   	return $this->hasMany(Produit::class);
   }
   public function region()
    {
    	return $this->belongsTo(Region::class);
    }
     public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}
