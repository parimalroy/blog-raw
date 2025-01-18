<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query('select*from posts where users_id= :users_id', [
    'users_id' => $_SESSION['user']['id']
])->get();

$totalPost = $db->query('select count(blog_title )from posts where users_id= :users_id', [
    'users_id' => $_SESSION['user']['id']
])->find();

$blogTitle = $db->query('select blog_title from posts where users_id= :users_id order by  id desc limit 1', ['users_id' => $_SESSION['user']['id']])->find();


// include("views/admin/home.php");

view('admin', 'home', ['posts' => $posts, 'totalPost' => $totalPost, 'blogTitle' => $blogTitle]);