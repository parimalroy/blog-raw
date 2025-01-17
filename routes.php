<?php


$router->get('/admin', 'admin/home.php')->only('auth');
$router->get('/admin/login', 'admin/login.php')->only('auth');
$router->get('/admin/profile', 'admin/profile.php')->only('auth');
$router->post('/admin/update', 'admin/update.php')->only('auth');

$router->get('/admin/blog/create-blog', 'blog/create.php')->only('auth');
$router->get('/admin/blog/edit-blog', 'blog/edit.php')->only('auth');
$router->get('/admin/blog/edit-blog', 'blog/edit.php')->only('auth');
$router->post('/admin/blog/update-blog', 'blog/update.php')->only('auth');
$router->post('/admin/blog/store-blog', 'blog/store.php')->only('auth');
$router->post('/admin/blog/delete-blog', 'blog/delete.php')->only('auth');
$router->get('/admin/blog/home-blog', 'blog/home.php')->only('auth');

$router->get('/admin/category/create-category', 'category/create.php')->only('auth');
$router->post('/admin/category/store-category', 'category/store.php')->only('auth');
// $router->get('/admin/category', 'front/category.php');

$router->get('/', 'front/home.php');
$router->get('/list', 'front/list.php');
$router->get('/details', 'front/details.php');
$router->get('/category', 'front/category.php');
$router->get('/category', 'front/category.php');
$router->get('/category-single', 'front/category-single.php');
$router->post('/category-filter', 'front/filter.php');

$router->get('/create-user', 'register/create.php')->only('guest');
$router->post('/store-user', 'register/store.php');

$router->get('/login-user', 'session/create.php')->only('guest');
$router->post('/user', 'session/store.php');
$router->post('/logout', 'session/destroy.php')->only('auth');


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