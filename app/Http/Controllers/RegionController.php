<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Type;
class RegionController extends Controller
{
   public function index()
   {
   	$region=Region::all();
   	$type=Type::all();
   	return view('welcome',compact('region','type'));
   }
}
