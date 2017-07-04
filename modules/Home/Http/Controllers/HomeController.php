<?php namespace Modules\Home\Http\Controllers;

use App\Repositories\Article\ArticleInterface;
use Illuminate\Support\Facades\Session;
use Pingpong\Modules\Routing\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    function __construct(ArticleInterface $articleInterface)
    {
        $this->_article = $articleInterface;
    }

    public function index()
    {
    }

    function Error404()
    {
        return view('errors.404');
    }

    function regular()
    {
        return view('home::regulations.regulations');
    }

}