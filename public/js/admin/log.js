
$(function(){

    function tryLogin()
    {
        var form_data = {};

        form_data['username'] = $('.login input[name=username]').first();
        form_data['password'] = $('.login input[name=password]').first();
        form_data['remember'] = $('.login input[name=remember]').first();

        alert(form_data['remember']);
    }

    var login = $('.login input[type="submit"]').first();
    login.on('click',tryLogin);
});
