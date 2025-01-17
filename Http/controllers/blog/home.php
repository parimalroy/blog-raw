<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$posts = $db->query('select*from posts where users_id= :users_id', [
    'users_id' => $_SESSION['user']['id']
])->fetchAll();

// dd($posts);
view('blog', 'home', ['posts' => $posts]);