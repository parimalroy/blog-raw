<?php

$uri =parse_url($_SERVER['REQUEST_URI']);

$routes=[
    'admin'=>[
        '/blog-raw/admin'=>'controllers/admin/home.php',
        '/blog-raw/admin/create'=>'controllers/admin/create.php',
        '/blog-raw/admin/edit'=>'controllers/admin/edit.php',
        '/blog-raw/admin/profile'=>'controllers/admin/profile.php',
        '/blog-raw/admin/setting'=>'controllers/admin/setting.php',
        '/blog-raw/admin/login'=>'controllers/admin/login.php',
        '/blog-raw/admin/insert'=>'controllers/admin/insert.php',
    ],

    'front'=>[
        '/blog-raw/'=>'controllers/front/home.php',
        '/blog-raw/list'=>'controllers/front/list.php',
        '/blog-raw/details'=>'controllers/front/details.php'
    ]
    
];

    if(array_key_exists($uri['path'],$routes['admin'])){
        require $routes['admin'][$uri['path']];
    }
    else if(array_key_exists($uri['path'],$routes['front'])){
        require $routes['front'][$uri['path']];
    }
    else{
        echo 'not found';
    }
























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
?>