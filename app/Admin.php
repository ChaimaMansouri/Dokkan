<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = ['id'];

   /* protected $hidden = [  //will not show up if converted to json or array
        'password'
    ]; */
}
