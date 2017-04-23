<?php

namespace App;



class Region extends Model
{
   public function artisans()
    {
    	return $this->hasMany(Artisan::class);
    }

}
