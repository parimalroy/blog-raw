<?php

// $config = require('config.php');
$config = require base_path('config.php');

$db = new Database($config['database']);

// $id=$_GET['id'];

// $query="select*from posts where id=:id";
// $post = $db->query($query, [':id'=>$id])->fetch();
// echo $post;
$post = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->fetch();

// include('views/front/details.php');
view(
    'front',
    'details',
    [
        'post' => $post
    ]
);