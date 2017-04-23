<?php

namespace App;


class Type extends Model
{
    public function produits()
    {
    	return $this->hasMany(Produit::class);
    }
    public function artisans()
    {
    	return $this->hasMany(Artisan::class);
    }
 
}
