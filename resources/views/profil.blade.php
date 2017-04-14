@extends('layouts.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">{{$a->name}}</h1>

          <div class="row placeholders">
            
          <div class="table-responsive">
           
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="/storage/photo/{{$a->photo_name}}" width="600" height="500" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4></h4>
              
          
            
          </div>

         
          </div>
        </div>

            </div>
            @endsection