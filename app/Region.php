<?php

namespace App;



class Region extends Model
{
   public function artisans()
    {
    	return $this->hasMany(Artisan::class);
    }
    public function getId($region)
    {
    	$r=Region::where('name',$region)->get();
            foreach ($r as $pos => $rr) {
                $id=$rr->id;
            }
            return $id;
    }
}
