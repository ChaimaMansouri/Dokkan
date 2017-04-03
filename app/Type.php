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
 
 	 public function getId($type)
    {
    	$r=Type::where('name',$type)->get();
            foreach ($r as $pos => $rr) {
                $id=$rr->id;
            }
            return $id;
    }
}
