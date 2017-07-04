<?php

return [
    'cache' => 1,
    'version' => '6.9',
    'IA_path' => '/var/www/html/feedy.vn/public/',
    'lang_support' => [
        'vi' => 'Tiếng Việt',
        'en' => 'English',
        'la' => 'Laos'
    ],
    'user_type' => [
        'type_1' => 'Admin',
        'type_2' => 'Editor',
        'type_3' => 'Normal',
        'type_4' => 'User_Vip',
        'type_5' => 'User_Normal',
        'type_6' => 'User_Api',
        'type_7' => 'User_Chef',
        'type_7' => 'User_Restaurant',
    ],
    'type_article' => [
        'recipe',
        'review'
    ],
    'rule_route' => [
        'review' => 'detail-review',
        'recipe' => 'detail-recipe',
        'blog' => 'detail-blog',
        'tin_tuc' => 'detail-tin-tuc'
    ],
    'rule_route_detail' => [
        'Review' => 'detail-review',
        'Recipe' => 'detail-recipe',
        'Blogs' => 'detail-blog'
    ],
    'type_category' => [
        'location' => ['Địa Điểm', 'review'], //địa điểmm
        'restaurant' => ['Nhà Hàng', 'review'],//nhà hàng
        'food_1' => ['Ăn Gì', 'review'],//món ăn
        'food_2' => ['Món Ăn', 'recipe'],//món ăn
        'cuisine' => ['Ẩm Thực', 'recipe'], //ẩm thực
        'food_type' => ["Loại Món", 'recipe'], //loại món
        'helper' => ['Cách Chế Biến', 'recipe'],//hướng dẫn
        'season' => ['Mùa và Dịp Lễ', 'recipe'] //mùa
    ],
    'Sendpackage' => [
        'url' => 'http://editor.feedy.vn/',
        'account' => 'admin',
        'password' => 'feedy!@#OoFebc'
    ]


];