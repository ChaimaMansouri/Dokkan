@extends ('/layouts/login_form')

@section ('fail')
    <p class='fail'>{{session()->get('fail')}}</p>
@endsection