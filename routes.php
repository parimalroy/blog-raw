<?php


$router->get('/admin', 'controllers/admin/home.php')->only('auth');
$router->get('/admin/create', 'controllers/admin/create.php')->only('auth');
$router->get('/admin/edit', 'controllers/admin/edit.php')->only('auth');
$router->get('/admin/profile', 'controllers/admin/profile.php')->only('auth');
$router->get('/admin/login', 'controllers/admin/login.php')->only('auth');
$router->post('/admin/insert', 'controllers/admin/create-post.php')->only('auth');
$router->post('/admin/delete', 'controllers/admin/delete-post.php')->only('auth');
// $router->get('/admin/category', 'controllers/front/category.php');

$router->get('/', 'controllers/front/home.php');
$router->get('/list', 'controllers/front/list.php');
$router->get('/details', 'controllers/front/details.php');
$router->get('/category', 'controllers/front/category.php');
$router->get('/category', 'controllers/front/category.php');
$router->get('/category-single', 'controllers/front/category-single.php');

$router->get('/create-user', 'controllers/register/create.php')->only('guest');
$router->post('/store-user', 'controllers/register/store.php');

$router->get('/login-user', 'controllers/session/create.php')->only('guest');
$router->post('/user', 'controllers/session/store.php');
$router->get('/logout', 'controllers/session/destroy.php')->only('auth');


// dd($router->routes);


























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