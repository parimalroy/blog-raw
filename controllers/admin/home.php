<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query('select*from posts')->fetchAll();



// include("views/admin/home.php");
view('admin', 'home', ['posts' => $posts]);