<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Admin;
use App\Region;
use App\Type;
use App\Artisan;


class AdminController extends Controller
{
    protected static $admin_vars = array('name','last_name','email','tel','adr','username','password');

    protected static $mail_regex = '/^([A-Za-z_.\-0-9]*)@([a-z]){3,10}\.([a-z]{2,5})$/';

    public function index_login(Request $request)
    {
        $fail = null;
        if( $request->hasCookie('username') and $request->hasCookie('password') )
        {
            $username_cookie = $request->cookie('username');
            $password_cookie = $request->cookie('password');

            $request->session()->put('username',$username_cookie);
            $request->session()->put('password',$password_cookie);

            $region = Region::all();
            $type = Type::all();
            $admin = Admin::where('username','=',$username_cookie);

            return view( 'admin.admin_tool' , compact('type','region','admin'));
        }

        else if( $request->session()->has('username') and $request->session()->has('password') )
        {
            $region = Region::all();
            $type = Type::all();
            $admin = Admin::where('username','=',$request->session()->get('username'))->first();

            return view( 'admin.admin_tool',compact('type','region','admin'));
        }

        else
        {
            return view('admin.admin_login');
        }
    }

    public function loginAdmin(Request $request)
    {
            $fail = null;

            if( ! $request->username or ! $request->password )
            {
                $fail = 'Your Credentials Need To Be Specified';

                return view('admin2.login_form')->with('fail',$fail);
            }

            $Admin = Admin::where('username','=',$request->username)->first();
            if( !$Admin )
            {
                $fail = 'Unknown Username';

                return view('admin2.login_form')->with('fail',$fail);
            }

            if( !password_verify($request->password,$Admin->password) )
            {
                $fail = 'Unknown Password';
                return view('admin2.login_form')->with('fail',$fail);
            }

            $request->session()->flush();

            $request->session()->put('username',$request->username);
            $request->session()->put('password',$request->password);

            $type = Type::all();
            $region = Region::all();
            $admin = Admin::where('username','=',$request->username)->first();

            if( $request->remember )
            {
                $username_cookie = cookie('username',$request->username,30);
                $password_cookie = cookie('password',$request->password,30);

                $login_cookies = array($username_cookie,$password_cookie);

                return view( 'admin.admin_tool' , compact('type','region','admin'))->withCookies($login_cookies);
            }

            else
            {
                return view( 'admin.admin_tool' , compact('type','region','admin'));
            }
    }

    public function logoutAdmin(Request $request)
    {
        $request->session()->flush();

        Cookie::queue( Cookie::forget('username') );
        Cookie::queue( Cookie::forget('password') );

        return view('admin2.login_form');
    }

    public function toolAdmin(Request $request)
    {
        $type = Type::all();
        $region = Region::all();
        $artisan = Artisan::all();
        $admin = Admin::where('username','=','sanji')->first();

        $request->session()->put('username','sanji');
        $request->session()->put('password','0123456789');

        return view('admin.admin_tool',compact('type','region','artisan','admin'));
    }

    // HERE WE ARE ADDING A NEW ADMIN

    public function addAdmin(Request $request)
    {
        $res = array();
        $username = $request->session()->get('username');
        $password = $request->session()->get('password');

        $adm = Admin::where('username','=',$username)->first();

        if( !$adm OR !password_verify($password,$adm->password) )
        {
            $res['auth_fail'] = 'There Was A Problem With Your Credentials, Try Relogging';
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        $admin = new Admin();
        //$elements = $request->elements;
        //$elements = json_decode($request->elements);
        $elements = array();
        $test = true;

        foreach( AdminController::$admin_vars as $var )
        {
            if ( !$request->$var || empty($request->$var) )

            {
                $res[$var.'_fail'] = $var." Field Is Missing";
                $test = false;
            }

            $elements[$var] = $request->$var;
        }

        if (!$test)
        {
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        if( strlen($elements['tel']) != 8 )
        {
            $res['tel_fail'] = "Phone Number Must Have 8 digits";
            $test = false;
        }
        if( !ctype_digit($elements['tel']) )
        {
            if( !array_key_exists('tel_fail',$res) )
            {
                $res['tel_fail'] = "Phone Number Must Only Contain digits";
            }
            else
            {
                $res['tel_fail'] = $res['tel_fail']."\nPhone Number Must Only Contain digits";
            }

            $test = false;
        }

        foreach( Admin::pluck('username') as $user )
        {
            if( $elements['username'] == $user )
            {
                $res['username_fail'] = "Username Already Taken";
                $test = false;
                break;
            }
        }

        if( strlen($elements['username']) > 60 )
        {
            if( !array_key_exists('username_fail',$res) )
            {
                $res['username_fail'] = "Username Must Be 60 characters max";
            }

            else
            {
                $res['username_fail'] = $res['username_fail']."\nUsername Must Be 60 characters max";
            }

            $test = false;
        }

        foreach( Admin::pluck('email') as $mail )
        {
            if( $elements['email'] == $mail )
            {
                $res['email_fail'] = "E-Mail Already Taken";
                $test = false;
                break;
            }
        }

        if ( !preg_match(AdminController::$mail_regex,$elements['email']) ) //strlen($elements['email']) > 255
        {
            if( !array_key_exists('email_fail',$res) )
            {
                $res['email_fail'] = "E-Mail Has A Weird Format"; //Or Is Too Long
            }

            else
            {
                $res['email_fail'] = $res['email_fail']."\nE-Mail Has A Weird Format Or Is Too Long";
            }
            $test = false;
        }

        if( strlen($elements['password']) < 10 )
        {
            $res['password_fail'] = "Password Too Short";
            $test = false;
        }
        if( $test )
        {
            $password = password_hash($elements['password'],CRYPT_SHA256);

            $attrs = array(
                'name' => $elements['name'],
                'last_name' => $elements['last_name'],
                'email' => $elements['email'],
                'tel' => $elements['tel'],
                'adr' => $elements['adr'],
                'username' => $elements['username'],
                'password' => $password,
            );

            foreach( $attrs as $key => $value)
            {
                $admin->$key = $value;
            }
            $admin->save();
            $res['add_success'] =  "Success, New Admin Was Added";
        }
        $admin = null;
        $attrs = null;

        $res = json_encode($res);
        response($res)->send();
    }

    //HERE WE ARE MODIFYING AN EXISTING ADMIN

    public function modifyAdmin(Request $request)
    {
        $res = array();
        $elements = array();

        //$elements = json_decode($request->elements);
        //$elements = $request->elements;

        foreach( AdminController::$admin_vars as $var )
        {
            $elements[$var] = $request->$var;
        }

        $username = $request->session()->get('username');
        $password = $request->session()->get('password');

        //$username = $_SESSION['username'];
        //$password = $_SESSION['password'];

        $admin = Admin::where('username','=',$username)->first(); //firstOrFail();
        $attrs = array();

        if( !$admin )
        {
            $res['auth_fail'] = "Unknown Username, Try Relogging";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        if( !password_verify($password,$admin->password) )
        {
            $res['auth_fail'] = "Your Credentials Do not Fit,Try Relogging";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        /*if( !password_verify($password,$adm['password']) )
            die('Incorrect Credentials');*/

        foreach( $elements as $attr => $value )
        {
            /*if( ! Schema::hasColumn($admin->getTable(),$attr) )
                die('One Of The Attributes Sent Does Not Match Any Field');

            else
            {*/
            if( $attr == 'password')
            {
                if ( strlen($value) >= 10 )
                {
                    $value = password_hash($value,CRYPT_SHA256);
                    $attrs['password'] = $value;
                    $res['password_success'] = "Password was changed Succefully";
                }

                else
                {
                    $res['password_fail'] = "Password was not changed";
                }
            }

            if( $attr == 'tel' )
            {
                if( ! empty($value) )
                {
                    if( strlen($value) == 8 and ctype_digit($value) )
                    {
                        $attrs['tel'] = $value;
                        $res['tel_success'] = "Telephone Number was changed Succefully";
                    }

                    else
                    {
                        $res['tel_fail'] = "Telephone Number must be an 8 digit number";
                    }
                }
                else
                {
                    $res['tel_fail'] = "Telephone Number Was Not Changed";
                }
            }

            if( $attr == 'email')
            {
                if ( ! empty($value) )
                {
                    if( ! Admin::where('email','=',$value) )
                    {

                        if( preg_match(AdminController::$mail_regex,$value)  and  (strlen($value) <= 255) )
                        {
                            $attrs['email'] = $value;
                            $res['email_success'] = "E-mail was changed Succefully";
                        }
                        else
                        {
                            $res['email_fail'] = "E-mail was not changed, New E-Mail has Weird Format";
                        }
                    }

                    else
                    {
                        $res['email_fail'] = "E-mail was not changed, E-mail Already Exists";
                    }
                }
                else
                {
                    $res['email_fail'] = "E-mail was not changed";
                }
            }

            if( $attr == 'username')
            {
                if ( !empty($value) )
                {
                    if( ! Admin::where('username','=',$value)->first() )
                    {
                        if( strlen($value) <= 60 )
                        {
                            $attrs['username'] = $value;
                            $res['username_success'] = "Username was changed Succefully";
                        }

                        else
                        {
                            $res['username_fail'] = "Username Must Be 60 Characters Or Less";
                        }

                    }

                    else
                    {
                        $res['username_fail'] = "Username was not changed, It Already Exists";
                    }
                }
                else
                {
                    $res['username_fail'] = "Username was not changed";
                }
            }

            if( $attr == 'adr' )
            {
                if( !empty($value) and strlen($value) <= 255)
                {
                    $attrs['adr'] = $value;
                    $res['adr_success'] = "Address was changed Succefully";
                }
                else
                {
                    $res['adr_fail'] = "Address was not changed";
                }
            }

            if( $attr == 'name' )
            {
                if( !empty($value)  and strlen($value) <= 60)
                {
                    $attrs['name'] = $value;
                    $res['name_success'] = "Name was changed Succefully";
                }
                else
                {
                    $res['name_fail'] ="Name was not changed";
                }
            }

            if( $attr == 'last_name' )
            {
                if( !empty($value) and strlen($value) <= 60)
                {
                    $attrs['last_name'] = $value;
                    $res['last_name_success'] = "Last Name was changed Succefully";
                }
                else
                {
                    $res['last_name_fail'] = "Last Name was not changed";
                }
            }

        }
//      }
        $admin->update($attrs);

        $admin = null;
        $attrs = null;

        $res = json_encode($res);
        response($res)->send();
    }

    // HERE WE ARE DELETING AN ADMIN

    public function deleteAdmin(Request $request)
    {
        $res = array();

        $username = $request->session()->get('username');
        $password = $request->session()->get('password');

        $admin = Admin::where('username','=',$username)->first();

        if( ! $admin )
        {
            $res['auth_fail'] = "Unknown Username, Try Relogging";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        if( ! password_verify($password,$admin->password) )
        {
            $res['auth_fail'] = "Your Credentials Do not Fit,Try Relogging";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        $user = $request->username;
        $pass = $request->password;

        $admin_del = Admin::where('username','=',$user)->first();

        if( ! $admin_del )
        {
            $res['username_fail'] = "The User You Want To Delete Does Not Exist";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        if( !password_verify($pass,$admin_del->password) )
        {
            $res['auth_fail'] = "The Password You Gave Does Not Fit The User You are Trying To Delete";
            $res = json_encode($res);
            response($res)->send();
            die();
        }

        $admin_del->delete();

        $res['del_success'] = "The User ".$user." Has Successfully been deleted";
        $res = json_encode($res);
        response($res)->send();
    }

    public function goAdmin(Request $request)
    {
        $input = $request->all();
        $res = array();

        foreach(AdminController::$admin_vars as $var)
        {
            $res[$var.'_fail'] = $var." Went Missing";
        }

        $res = json_encode($res);
        response($res)->send();
        die();

        echo 'yolo';
    }
}
