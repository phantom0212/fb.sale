<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Session;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        //parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        //return redirect()->to('/404');

        $time = time();
        if($time - session()->get('time_login') > 86400 ){
            Session::forget('user');
            Session::forget('password');
            Session::forget('user_id');
            Session::forget('email');
            Session::forget('SHOP_ID');
            Session::forget('time_login');
            Session::forget('accesstoken');
        }
        $email  = session()->get('email');
        $password = session()->get('password');
        $access = session()->get('accesstoken');
        $check = false;
        if($email != null && $password!= null && $access != null){
            $check = true;
        }

        if(!$check){
            return redirect()->to('/');
        }
        return parent::render($request, $e);
    }
}
