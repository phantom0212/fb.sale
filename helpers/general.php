<?php
function getToken($email,$password)
{
    $post = array(
        "grant_type" => "password",
        "userName" => $email,
        "password" => $password,
    );
    $postText = http_build_query($post);
    $ch_token = curl_init();
    curl_setopt($ch_token, CURLOPT_URL, FILE_PATH_ACCESS_TOKEN);
    curl_setopt($ch_token, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch_token, CURLOPT_POST, true);
    curl_setopt($ch_token, CURLOPT_POSTFIELDS, $postText);
    curl_setopt($ch_token, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch_token, CURLOPT_SSL_VERIFYHOST, false);

    $token_obj = curl_exec($ch_token);
    $httpcode = curl_getinfo($ch_token, CURLINFO_HTTP_CODE);
   if ($httpcode == 200){
       $data = json_decode($token_obj);
       $token = $data->access_token;
       return $token;
   }else{
       redirect('/')->with('message', 'Có lỗi xảy ra khi đăng nhập');
   }
}

function getOptions($email,$password)
{
    $token = getToken($email,$password);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => false,         // follow redirects
        CURLOPT_AUTOREFERER => true,         // set referer on redirect
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_VERBOSE => 1,
        CURLOPT_HTTPHEADER => array(
            "Authorization: bearer $token",
            "Content-Type: application/x-www-form-urlencoded"
        )

    );
    return $options;
}

function getLogin($email,$password)
{
    $token = getToken($email,$password);
    $client = new GuzzleHttp\Client([
        'headers' => [
            "Authorization" => "bearer $token",
            "Content-Type" => "application/x-www-form-urlencoded"
        ]
    ]);
    $data_mail = array(
        'email' => $email,
        'password' => $password,
    );

    $data = http_build_query($data_mail);

    $response = $client->POST(FILE_PATH_LOGIN, ['body' => $data]);
    $user = ($response->getBody());

    return $user;
}

function getListShop($email,$password)
{
    try {
        $options = getOptions($email, $password);
        $url = FILE_PATH_LIST_SHOP;
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $data = curl_exec($ch);
        curl_close($ch);
        $items = (json_decode($data)->data);
        return $items;
    }catch (Exception $e){
        return 'error';
    }
}
