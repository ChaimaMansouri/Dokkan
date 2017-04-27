<?php
session()->put('username','sanji');
session()->put('password','0123456789');
?>

        <!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src={{ \Illuminate\Support\Facades\URL::asset("js/jquery/jquery.min.js") }}></script>
</head>
<body>
<form  name="ad_add" id ="ad_add" >
    {{ csrf_field()  }}
    <label name='l1' for='username'>username</label>
    <input type="text" size=60 maxlength=120 id="username" name="username"/><br/>

    <label name='l2' for='password'>password</label>
    <input type="password" size=60 maxlength=60 id="password" name="password"/><br/>

    <label name='l3' for='email'>e-mail</label>
    <input type="email" size=60 maxlength=255 id="email" name="email"/><br/>

    <label name='l4' for='tel'>mobile</label>
    <input type="tel" size=8 maxlength=8 id="tel" name="tel"/><br/>

    <label name='l5' for='adr'>address</label>
    <input type="text" size=60 maxlength=255 id="adr" name="adr"/><br/>

    <label name='l6' for='last_name'>last_name</label>
    <input type="text" size=60 maxlength=60 id="last_name" name="last_name"/><br/>

    <label name='l7' for='name'>name</label>
    <input type="text" size=60 maxlength=60 id="name" name="name" class="form_elements"/><br/>

    <input  type="submit" value="submit"/>
    <button type="button" id="go">GO</button>

    <button type="reset" id="clear">Clear</button>
</form><br><br>

<script type="text/javascript">

    var token = $("input[name=_token]").val();

    function submitting()
    {
        var username = $("input[id=username]").val();
        var email = document.getElementById("email").value;
        var password = $("#password").val();
        var tel = $("#tel").val();
        var adr = $("#adr").val();
        var name = $("#name").val();
        var last_name = $("#last_name").val();

        $.post('/add_admin',{_token:token,username:username,password:password,email:email,tel:tel,adr:adr,name:name,last_name:last_name},function going(data){
            var res = JSON.parse(data);
            var show = '';
            for(var ele in res)
            {
                show += ele + '=>' + res[ele] + '\n';
            }
            alert(show);
        });
    }
    document.getElementById('go').onclick = submitting;
</script>

</body>
</html>
