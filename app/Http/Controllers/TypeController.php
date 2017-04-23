<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Artisan;
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
   public function destroy()
   {
      
      $a=Artisan::where('type_id',request('id'));
      if($a)
      {
         return "error";
      }
      else{
      $t=Type::find(request('id'));
      $t->delete();
      $type=Type::all();
      $j=$type->toJson();
      return response()->json($j);
   }
   }
   public function updateType()
   {
      $t=Type::find(request('id'))->update(['name'=>request('name')]);
      $type=Type::all();
      $j=$type->toJson();
      return response()->json($j);
   }
}
