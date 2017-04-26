@extends ('/layouts/login_layout')

@section ('fail')
    <p class='.fail'>{{session()->get('fail')}}</p>
@endsection