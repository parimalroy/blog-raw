<?php

$routes = [
    'admin' => [
        '/admin' => 'controllers/admin/home.php',
        '/admin/create' => 'controllers/admin/create.php',
        '/admin/edit' => 'controllers/admin/edit.php',
        '/admin/profile' => 'controllers/admin/profile.php',
        '/admin/setting' => 'controllers/admin/setting.php',
        '/admin/login' => 'controllers/admin/login.php',
        '/admin/insert' => 'controllers/admin/create-post.php',
    ],

    'front' => [
        '/' => 'controllers/front/home.php',
        '/list' => 'controllers/front/list.php',
        '/details' => 'controllers/front/details.php'
    ]

];

// var_dump($uri['path']);

// if (array_key_exists($uri['path'], $routes['admin'])) {
//     require $routes['admin'][$uri['path']];
// } else if (array_key_exists($uri['path'], $routes['front'])) {
//     require $routes['front'][$uri['path']];
// } else {
//     echo 'not found';
// }
























// $uri =parse_url($_SERVER['REQUEST_URI']);
// // echo $_SERVER['REQUEST_URI'];

// $routes=[
//     '/blog-raw/admin'=>'controllers/admin/home.php',
//     '/blog-raw/create'=>'controllers/admin/create.php',
//     '/blog-raw/edit'=>'controllers/admin/edit.php',
//     '/blog-raw/profile'=>'controllers/admin/profile.php',
//     '/blog-raw/setting'=>'controllers/admin/setting.php',
//     '/blog-raw/login'=>'controllers/admin/login.php',


//     '/blog-raw/'=>'controllers/front/home.php',
//     '/blog-raw/list'=>'controllers/front/list.php',
//     '/blog-raw/details'=>'controllers/front/details.php'

// ];

// //  echo $uri['path'];
// if(array_key_exists($uri['path'],$routes)){
//     require $routes[$uri['path']];
// }else{
//     echo 'not found';
// }