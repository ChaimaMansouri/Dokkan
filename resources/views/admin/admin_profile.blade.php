@if ( session()->has('username') )
{{session()->get('username')}}<br>
@endif

@if ( session()->has('password') )
{{session()->get('password')}}<br>
@endif

@if ( session()->has('fail') )
{{session()->get('fail')}}<br>
@endif