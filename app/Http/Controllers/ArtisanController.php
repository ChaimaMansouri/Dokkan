<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artisan;
use App\Region;
use App\Type;

class ArtisanController extends Controller
{
    public function store($id)
    {
    	$this->validate(request(),['address'=>'required',
    		'email'=>'required|email',
    		'tel'=>'required',
    		'name'=>'required'
    		]);
            $region=new Region;
            $id_region=$region->getId(request('region'));
    	Artisan::create([
    		'address' => request('address'),
    		'description' => request('description'),
    		'email' => request('email'),
    		'name' => request('name'),
    		'tel' => request('tel'),
    		'photo_name' => request('photo_name'),
            'region_id'=> $id_region,
            'type_id'=> $id

            ]);
        
    	return "success";
    }
     public function upload_photo()
    {
        $file=request()->file('file');
       	$name="";
        if ($file) 
        {
        $path=$file->store('public/photo');
        }
        $t=explode('/',$path);

        $name=$t[count($t)-1];
        
        return $name;
    }
    public function getProfil($id)
    {
        $a=Artisan::find($id);
        $region=Region::all();
    $type=Type::all();
        return view('profil',compact('a','type','region'));
    }
}
