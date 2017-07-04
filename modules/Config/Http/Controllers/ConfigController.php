<?php

namespace Modules\Config\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller {

    public function listLabel() {
//        $secret = 'fbsale@!321';
//        $key = md5($secret);
//        //dd($key);
//        //Take first 8 bytes of $key and append them to the end of $key.
//        $key = substr($key, 0, 24);
//        $data = base64_decode('8B12ifZg/WDjwCbVB3cFQJXKEviCf0KB+jPZHXOgboeEkxb8zeb/+PYZV8DG3S+k6tG1Ym27ORHO31wBm1OnacJVMMHDlIOM9nDQZtWFI5U=');
//
//        $data = mcrypt_decrypt('tripledes', $key, $data, 'ecb');
//
//        $block = mcrypt_get_block_size('tripledes', 'ecb');
//        $len = strlen($data);
//        $pad = ord($data[$len-1]);
//        dd(substr($data, 0, strlen($data) - $pad));

        try {

            $email = Session::get('email');
            $password = Session::get('password');

            $options = getOptions($email, $password);
            $url = FILE_PATH_LIST_LABEL;
            $ch = curl_init($url);
            curl_setopt_array($ch, $options);
            $data = curl_exec($ch);
            curl_close($ch);
            $items = (json_decode($data)->data);

            $url_setting = FILE_PATH_CONFIG . '/' . Session::get('SHOP_ID');
            $ch_setting = curl_init($url_setting);
            curl_setopt_array($ch_setting, $options);
            $data_setting = curl_exec($ch_setting);
            curl_close($ch_setting);
            $checks['checks'] = (json_decode($data_setting)->data);

            if (Session::has('user')) {
                Session::get('user');
                return view('config::config.setup', compact('items', 'checks'));
            }
            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/');
        }
    }

    public function addLabel(Request $request) {
        $email = Session::get('email');
        $password = Session::get('password');
        $label = $request->input('label');
        $color = substr(($request->input('color')), 1, 6);
        $token = getToken($email, $password);
        $client = new Client([
            'headers' => [
                "Authorization" => "bearer $token",
                "Content-Type" => "application/x-www-form-urlencoded"
            ]
        ]);
        $data = array(
            'ShopId' => Session::get('SHOP_ID'),
            'LabelName' => $label,
            'LabelColor' => $color
        );
        $data = http_build_query($data);

        $response = $client->post(FILE_PATH_ADD_LABEL, ['body' => $data]);

        return redirect()->back()->with('success', ['Thêm thành công!']);
    }

    public function destroy(Request $request) {
        $email = Session::get('email');
        $password = Session::get('password');
        $id = $request->get('id');
        $token = getToken($email, $password);
        $client = new Client([
            'headers' => [
                "Authorization" => "bearer $token",
                "Content-Type" => "application/x-www-form-urlencoded"
            ]
        ]);
        $response = $client->delete(FILE_PATH_ADD_LABEL . '/' . $id);
    }

    public function update(Request $request) {
        $email = Session::get('email');
        $password = Session::get('password');
        $id = $request->get('id');
        $name = $request->get('name');
        $color = substr($request->get('color'), 1, 6);

        $token = getToken($email, $password);
        $client = new Client([
            'headers' => [
                "Authorization" => "bearer $token",
                "Content-Type" => "application/x-www-form-urlencoded"
            ]
        ]);
        $data = array(
            'LabelId' => $id,
            'LabelName' => $name,
            'LabelColor' => $color
        );
        $data = http_build_query($data);
        $response = $client->PUT(FILE_PATH_ADD_LABEL . '/' . $id, ['body' => $data]);
    }

    public function setting(Request $request) {
        $inbox = $request->get('inbox');
        $sound = $request->get('sound');
        $unread = $request->get('unread');
        $like = $request->get('like');
        $order = $request->get('order');
        $comment = $request->get('comment');

        if ($inbox == 1) {
            $inbox_post = 'true';
        } else {
            $inbox_post = 'false';
        }
        if ($sound == 1) {
            $sound_post = 'true';
        } else {
            $sound_post = 'false';
        }
        if ($unread == 1) {
            $unread_post = 'true';
        } else {
            $unread_post = 'false';
        }
        if ($like == 1) {
            $like_post = 'true';
        } else {
            $like_post = 'false';
        }
        if ($order == 1) {
            $order_post = 'true';
        } else {
            $order_post = 'false';
        }
        if ($comment == 1) {
            $comment_post = 'true';
        } else {
            $comment_post = 'false';
        }

        $email = Session::get('email');
        $password = Session::get('password');
        $token = getToken($email, $password);
        $client = new Client([
            'headers' => [
                "Authorization" => "bearer $token",
                "Content-Type" => "application/x-www-form-urlencoded"
            ]
        ]);
        $res = array(
            'NewMessageNotification' => $inbox_post,
            'NotificationSound' => $sound_post,
            'NewMessagePriority' => $unread_post,
            'NewCommentLike' => $like_post,
            'AutoCreateOrder' => $order_post,
            'AutoHideComment' => $comment_post,
        );
        $data = http_build_query($res);
        $response = $client->PUT(FILE_PATH_CONFIG . '/' . Session::get('SHOP_ID'), ['body' => $data]);
    }

    public function statitic() {
        try {
            if (Session::has('user')) {
                Session::get('user');
                $email = Session::get('email');
                $password = Session::get('password');
                $options = getOptions($email, $password);
                $url = FILE_PATH_LIST_SHOP;
                $ch = curl_init($url);
                curl_setopt_array($ch, $options);
                $data = curl_exec($ch);
                curl_close($ch);
                $shops = (json_decode($data)->data);

                return view('config::config.chart', compact('shops', 'shops'));
            } else {
                return redirect('/');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return redirect('/');
        }
    }

    public function chartmessage(Request $request) {
        try {
            if (Session::has('user')) {
                $email = Session::get('email');
                $password = Session::get('password');
                $id = $request->get('id');
                $start_date = $request->get('start_date');
                $end_date = $request->get('end_date');
                $options = getOptions($email, $password);
                $url = FILE_PATH_CHART . 'conversation?shopID=' . $id . '&startDate=' . $start_date . '&endDate=' . $end_date;
                $ch = curl_init($url);
                curl_setopt_array($ch, $options);
                $data = curl_exec($ch);
                curl_close($ch);
                echo $data;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
//            return redirect('/');
        }
    }

    public function chartorder(Request $request) {
        try {
            if (Session::has('user')) {
                $email = Session::get('email');
                $password = Session::get('password');
                $id = $request->get('id');
                $start_date = date('Y-m-d', strtotime($request->get('start_date')));
                $end_date = date('Y-m-d', strtotime($request->get('end_date')));
                $options = getOptions($email, $password);
                $url = FILE_PATH_CHART . 'order?shopID=' . $id . '&startDate=' . $start_date . '&endDate=' . $end_date;
                $ch = curl_init($url);
                curl_setopt_array($ch, $options);
                $data = curl_exec($ch);
                curl_close($ch);
                echo $data;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
//            return redirect('/');
        }
    }

}
