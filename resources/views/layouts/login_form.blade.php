
<script type="text/javascript" src={{URL::asset('/js/jquery/jquery.min.js')}}></script>

<link rel="stylesheet" type="text/css" href={{URL::asset('css/login.css')}}><script type="text/javascript" src={{URL::asset('js/login.js')}}></script>

<div class="login-page">
    <div class="login_form login_container">

        @yield ('fail')

        <form method="POST" action={{url("/admin_login")}} class="login-form">
            {{csrf_field()}}
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button>login</button>
            <input type="checkbox" name="remember" class='check'/><label>Remember Me</label>
        </form>
    </div>
</div>