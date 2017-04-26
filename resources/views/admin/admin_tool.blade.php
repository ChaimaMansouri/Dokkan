@extends('layouts.master')

@section ('admin_manager_css')
    <link rel="stylesheet" type="text/css" href="/css/admin/drop.css"/>
@endsection

@section ('admin_manager_js')
   <script type="text/javascript" src="/js/admin/modals.js"></script>
@endsection

@section ('admin_management')

    <li id="admin_manage" class="ile">
        <a href="#">Gérer Admins</a>
        <ul class="nav navbar-nav navbar-right ule">
            <li><a href="#" class="admin_action" name="add">Ajouter</a></li>
            <li><a href="#" class="admin_action" name="modify">Modifier</a></li>
            <li ><a href="#" class="admin_action" name="delete">Supprimer</a></li>
        </ul>
    </li>

@endsection


@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main boo">
        <h1 class="page-header yolo">
            Welcome {{$admin->name}}
        </h1>

        <div class="row placeholders">

            <div class="table-responsive">
                <!--<div class="col-xs-6 col-sm-3 placeholder">
                    <img src="/storage/photo/" width="600" height="500" class="img-responsive" alt="Generic placeholder thumbnail">
                </div>-->
            </div>
        </div>

    </div>
@endsection