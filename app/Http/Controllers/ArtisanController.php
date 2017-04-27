<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artisan;
use App\Region;
use App\Type;
use Illuminate\Support\Facades\Storage;
class ArtisanController extends Controller
{
    public function store()
    {
    	$this->validate(request(),['address'=>'required',
    		'email'=>'required|email',
    		'tel'=>'required',
    		'name'=>'required',
            'type'=>'required',
            'region'=>'required',
            'x'=>'required',
            'y'=>'required'
    		]);    
    	Artisan::create([
    		'address' => request('address'),
    		'description' => request('description'),
    		'email' => request('email'),
    		'name' => request('name'),
    		'tel' => request('tel'),
    		'photo_name' => request('photo_name'),
            'region_id'=> request('region'),
            'type_id'=> request('type'),
            'x'=> request('x'),
            'y'=>request('y')
            ]);
        
    	return "success";
    }
     public function upload_photo()
    {
        $file=request()->file('file');
       	$name="";
        if ($file) 
        {
        $path=$file->store('photo');
        }
        $t=explode('/',$path);

        $name=$t[count($t)-1];
        
        return $name;
    }
     public function delete_photo()
    {
        $img=request('delPhoto');
         Storage::delete('photo/'.$img);
         return "success";
    }
    public function getProfil($id)
    {
        $type=Type::all();
        $region=Region::all();
        $artisan=Artisan::all();
        $a=Artisan::find($id);
        return view('profil',compact('a','region','type','artisan'));
    }
    public function getArtisan()
    {
        $a=Artisan::find(request('id'));
        $j=$a->toJson();
        return response()->json($j);
    }
    public function destroy()
    {
        $a=Artisan::find(request('id'));
        $im=$a->photo_name;
        Storage::delete('photo/'.$im);
        $a->delete();
       $all=Artisan::all();
        $j=$all->toJson();
        return response()->json($j);
    }
    public function updateArtisan()
    {
        $this->validate(request(),['address'=>'required',
            'email'=>'required|email',
            'tel'=>'required',
            'name'=>'required',
            'type'=>'required',
            'region'=>'required',
            'x'=>'required',
            'y'=>'required'
            ]);  
            $artisan=Artisan::find(request('id'))->update([
            'address' => request('address'),
            'description' => request('description'),
            'email' => request('email'),
            'name' => request('name'),
            'tel' => request('tel'),
            'photo_name' => request('photo_name'),
            'region_id'=> request('region'),
            'type_id'=> request('type'),
            'x'=> request('x'),
            'y'=>request('y')
            ]);
            $ar=Artisan::all();
      $json=$ar->toJson();
      return response()->json($json);
    }
function getype()
{
    $a=Artisan::where('type_id',request('idt'))->get();
    $j=$a->toJson();
    return response()->json($j);
}
function getRegion()
{
    $a=Artisan::where('region_id',request('idr'))->get();
    $j=$a->toJson();
    return response()->json($j);
}
}
