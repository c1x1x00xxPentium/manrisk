<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest');
    }

    public function logon($skey){
        date_default_timezone_set("Asia/Jakarta");
        $i=strpos($skey, 'lll');
        $nip=substr($skey, 0, $i);
	    $key = $nip."lll".md5(date("Ymd").substr($nip,6).date("h"));
        if($skey==$key){
            if (Auth::guard()->attempt(['username' => $nip, 'password' => '123456'])) {
                return redirect()->intended(route('resiko'));
            }
        }
        else{
            echo "fail";
        }
    }
}
