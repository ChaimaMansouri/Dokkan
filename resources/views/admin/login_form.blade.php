@extends ('layouts.login_layout')

@section ('additions')

    <link rel="stylesheet" type="text/css" href={{URL::asset("css/admin/style.css")}} />
    <script src={{URL::asset("js/admin/cufon-yui.js")}} type="text/javascript"></script>
    <script src={{URL::asset("js/admin/admin_log.font.js")}} type="text/javascript"></script>
    <script type="text/javascript" src="js/admin/log.js"></script>
    <script type="text/javascript">
        Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
        Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
        Cufon.replace('h3',{ textShadow: '1px 1px #000'});
        Cufon.replace('.back');
    </script>
    <div class="wrapper">
        <div class="content">
            <div id="form_wrapper" class="form_wrapper">
                <form class="login active">
                    <h3>Login</h3>
                    <div>
                        @if (session()->has('fail'))
                            <span class="wassup">{{session()->get('fail')}}</span>
                        @endif
                        <label>Username:</label>
                        <input type="text" name="username"/>
                        <span class="error">This is an error</span>
                    </div>
                    <div>
                        <label>Password: <a href={{url("pass_recovery")}} rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
                        <input type="password" name="password"/>
                        <span class="error">This is an error</span>
                    </div>
                    <div class="bottom">
                        <div class="remember"><input type="checkbox" name="remmeber"/><span>Keep me logged in</span></div>
                        <input type="submit" value="Login"/>
                        <div class="clear"></div>
                    </div>
                </form>
                <form class="forgot_password">
                    <h3>Forgot Password</h3>
                    <div>
                        <label>Username or Email:</label>
                        <input type="text" />
                        <span class="error">This is an error</span>
                    </div>
                    <div class="bottom">
                        <input type="submit" value="Send reminder"/>
                        <a href={{url('login_form')}} rel="login" class="linkform">Log in here</a>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>


    <!-- The JavaScript -->
    <script type="text/javascript" src={{url("js/jquery/jquery.min.js")}}></script>
    <script type="text/javascript">
        $(function() {
            //the form wrapper (includes all forms)
            var $form_wrapper	= $('#form_wrapper'),
                //the current form is the one with class active
                $currentForm	= $form_wrapper.children('form.active'),
                //the change form links
                $linkform		= $form_wrapper.find('.linkform');

            //get width and height of each form and store them for later
            $form_wrapper.children('form').each(function(i){
                var $theForm	= $(this);
                //solve the inline display none problem when using fadeIn fadeOut
                if(!$theForm.hasClass('active'))
                    $theForm.hide();
                $theForm.data({
                    width	: $theForm.width(),
                    height	: $theForm.height()
                });
            });

            //set width and height of wrapper (same of current form)
            setWrapperWidth();

            $linkform.bind('click',function(e){
                var $link	= $(this);
                var target	= $link.attr('rel');
                $currentForm.fadeOut(400,function(){
                    //remove class active from current form
                    $currentForm.removeClass('active');
                    //new current form
                    $currentForm= $form_wrapper.children('form.'+target);
                    //animate the wrapper
                    $form_wrapper.stop()
                        .animate({
                            width	: $currentForm.data('width') + 'px',
                            height	: $currentForm.data('height') + 'px'
                        },500,function(){
                            //new form gets class active
                            $currentForm.addClass('active');
                            //show the new form
                            $currentForm.fadeIn(400);
                        });
                });
                e.preventDefault();
            });

            function setWrapperWidth(){
                $form_wrapper.css({
                    width	: $currentForm.data('width') + 'px',
                    height	: $currentForm.data('height') + 'px'
                });
            }

            $form_wrapper.find('input[type="submit"]')
             .click(function(e){
             e.preventDefault();
             });
        });
    </script>
@endsection