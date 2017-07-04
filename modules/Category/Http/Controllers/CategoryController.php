<?php namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Article\ArticleInterface;
use Pingpong\Modules\Routing\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class CategoryController extends Controller
{

    function __construct(ArticleInterface $articleInterface)
    {
        $this->_article = $articleInterface;
    }

    function getList()
    {
        if (Session::has('user')) {
            // GET POSTS OF PAGES
            $email = Session::get('email');
            $password  = Session::get('password');

            $options = getOptions($email,$password);
            $page = request()->get('page') ? request()->get('page') : 1;
            $url = FILE_PATH_PAGE_DATA . $page . '&page_size=' . PAGINATE_DATA . '&query=ShopId=' . Session::get('SHOP_ID') . '';
            $ch = curl_init($url);
            curl_setopt_array($ch, $options);
            $data = curl_exec($ch);
            curl_close($ch);

            $items = (json_decode($data)->data);


            // GET ALL POSTS
            $url_all = FILE_PATH_PAGE_ALL_DATA . Session::get('SHOP_ID') . '/posts';
            $ch_all = curl_init($url_all);
            curl_setopt_array($ch_all, $options);
            $data_all = curl_exec($ch_all);
            curl_close($ch_all);

            $items_all = (json_decode($data_all)->data);
            $item_count = (json_decode($data_all)->metadata);
            $pages_sum = ceil(($item_count->item_count) / PAGINATE_DATA);
            Session::get('user');
            return view('category::chat.list', compact('items', 'pages_sum', 'page', 'items_all', 'item_count'));
        }
        return redirect('/');
    }

    function hideComment()
    {
        try
        {
            if (Session::has('user'))
            {
                $id  = request()->get('id');
                $email = Session::get('email');
                $password  = Session::get('password');

                $email = Session::get('email');
                $password  = Session::get('password');
                $token = getToken($email,$password);
                $url = 'https://apiv1.fb.sale/api/posts/'.$id.'/settings';
                $client = new Client([
                    'headers' => [
                        "Authorization" => "bearer $token",
                        "Content-Type" => "application/x-www-form-urlencoded"
                    ]
                ]);
                $response = $client->post($url);
                dd($response);
                return 'success';

            }
            return redirect('/');
        }
        catch (\Exception $e)
        {
            abort('404');
        }
    }
}