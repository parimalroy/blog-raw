<?php

use core\App;
use core\Database;
// $config = require('config.php');
// $config = require base_path('config.php');

// $db = new Database($config['database']);
$db = App::resolve(Database::class);


$posts = $db->query('select * from posts')->fetchAll();

// include('views/front/list.php');
view('front', 'list', ['posts' => $posts]);