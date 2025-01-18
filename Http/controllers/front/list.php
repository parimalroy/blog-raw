<?php

use core\App;
use core\Database;
// $config = require('config.php');
// $config = require base_path('config.php');

// $db = new Database($config['database']);
$db = App::resolve(Database::class);


// $posts = $db->query('select * from posts order by id desc')->fetchAll();

$categories = $db->query('select * from categories')->get();

// dd($categories);

// include('views/front/list.php');

$record_per_page = 3;
$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $record_per_page;
$posts = $db->query("select * from posts order by  id desc limit $start_from,$record_per_page")->get();

$page_result = $db->query('select count(blog_title) from posts order by id desc')->find();

$total_record = $page_result['count(blog_title)'];
$total_page = ceil($total_record / $record_per_page);
// dd($total_page);

view('front', 'list', ['posts' => $posts, 'categories' => $categories, 'total_page' => $total_page]);