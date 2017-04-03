<?php

namespace App;



class Produit extends Model
{
    public function artisans()
    {
    	return $this->hasMany(Artisan::class);
    }
}
