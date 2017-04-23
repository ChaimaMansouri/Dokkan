<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Type;
use App\Artisan;
class RegionController extends Controller
{
   public function index()
   {
   	$region=Region::all();
   	$type=Type::all();
   	$artisan=Artisan::all();
   	return view('layouts.master',compact('region','type','artisan'));
   }
}
