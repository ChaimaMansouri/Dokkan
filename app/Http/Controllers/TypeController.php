<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{

   public function store()

   { 
   	$this->validate(request(),[
   		'name' => 'required'
   		]);

   	Type::Create([
   		'name' => request('name')
   		]);
   	return "success";
   
   }
}
