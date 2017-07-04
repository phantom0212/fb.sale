<?php namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Article\ArticleInterface;
use App\User;
use Illuminate\Support\Facades\Session;
use Pingpong\Modules\Routing\Controller;
use Crypt;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    function __construct(ArticleInterface $articleInterface)
    {
        $this->_article = $articleInterface;
    }

    public function index()
    {

        $time = time();
        if ($time - session()->get('time_login') > 86400) {
            Session::forget('user');
            Session::forget('password');
            Session::forget('user_id');
            Session::forget('email');
            Session::forget('SHOP_ID');
            Session::forget('time_login');
            Session::forget('accesstoken');
        }
        $email = session()->get('email');
        $password = session()->get('password');
        $access = session()->get('accesstoken');
        $check = false;
        if ($email != null && $password != null && $access != null) {
            $check = true;
        }

        if ($check) {
            return redirect()->route('setting-general');
        } else {
            return view('user::login.index');
        }
    }

    function employeeLogin(Request $request)
    {
        try {
            $email = request()->get('username');
            $password = md5(request()->get('password'));

            $data = getLogin($email, $password);
            $access_token = getToken($email, $password);

            $user = (json_decode($data)->data);
            $meta = (json_decode($data)->meta);

            if (($meta->error_message) == 'Success') {
                //Send secret key to chat
                $user_id = $user->EmployeeId;
                $shop_id = $user->ShopId;
                $user_name = $user->EmployeeName;

                $time = time();
                Session::put('user', $user_name);
                Session::put('email', $email);
                Session::put('password', $password);
                Session::put('user_id', $user_id);
                Session::put('time_login', $time);
                Session::put('accesstoken', $access_token);
                Session::get('user');
                Session::put('SHOP_ID', $shop_id);
                return redirect()->route('setting-general');
            }
            return redirect()->back()->with('message', 'Sai email hoặc password. Vui lòng nhập lại!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Có lỗi xảy ra khi đăng nhập');
        }
    }

    function employeeLogout()
    {
        Session::flush();
        return redirect()->to(env('DOMAIN_CHAT') . 'dang-xuat?status=true');
    }

    function decryptUser()
    {
        if (request()->has('key')) {
            $secret = \Illuminate\Support\Facades\Crypt::decrypt(request()->get('key'));

            $array = explode('|', $secret);
            $time = $array[3];
            return response()->json([
                'secret' => $secret
            ]);
            if (time() - $time <= 20) {
                return response()->json([
                    'secret' => $secret
                ]);
            } else {
                return response()->json([
                    'secret' => null
                ]);
            }
        }
    }

    function apiLogin()
    {
        $hash = $_GET['hash'];
        $time = $_GET['time'];
        $secret = 'fbsale@!321';
        $key = md5($secret);
        //Take first 8 bytes of $key and append them to the end of $key.
        $key = substr($key, 0, 24);
        $data = base64_decode($hash);

        $data = mcrypt_decrypt('tripledes', $key, $data, 'ecb');

        $block = mcrypt_get_block_size('tripledes', 'ecb');
        $len = strlen($data);
        $pad = ord($data[$len - 1]);
        $url_decode =substr($data, 0, strlen($data) - $pad);

        $iparr = explode("|", $url_decode);
        $email = $iparr[1];
        $password = $iparr[2];
        $data = getLogin($email, $password);
        $access_token = getToken($email, $password);


        $user = (json_decode($data)->data);
        $meta = (json_decode($data)->meta);
        if (($meta->error_message) == 'Success') {
            //Send secret key to chat
            $user_id = $user->EmployeeId;
            $shop_id = $user->ShopId;
            $user_name = $user->EmployeeName;

            $time = time();
            Session::put('user', $user_name);
            Session::put('email', $email);
            Session::put('password', $password);
            Session::put('user_id', $user_id);
            Session::put('time_login', $time);
            Session::put('accesstoken', $access_token);
            Session::get('user');
            Session::put('SHOP_ID', $shop_id);
            return redirect()->route('encrypt-chat');
        }
        return redirect('/login');
    }
}