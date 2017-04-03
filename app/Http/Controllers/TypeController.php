<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
   public function typeProduit()
   {
   	$p=Type::All();
   	return $p
   }
}
