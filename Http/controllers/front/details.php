<?php

use core\App;
use core\Database;
// $config = require('config.php');
// $config = require base_path('config.php');

// $db = new Database($config['database']);
$db = App::resolve(Database::class);



$post = $db->query('SELECT *
FROM posts p
INNER JOIN categories c
ON p.category_id = c.id where p.id = :id', ['id' => $_GET['id']])->find();

$reletedPosts = $db->query("SELECT *
FROM posts p
INNER JOIN categories c
ON p.category_id = c.id where p.category_id= :id", ['id' => $post['id']])->get();
// dd($reletedPosts);
// include('views/front/details.php');
view(
    'front',
    'details',
    [
        'post' => $post,
        'reletedPosts' => $reletedPosts
    ]
);