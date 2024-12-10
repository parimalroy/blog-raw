<?php

use core\App;
use core\Database;
// $config = require('config.php');
// $config = require base_path('config.php');

// $db = new Database($config['database']);
$db = App::resolve(Database::class);



$post = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->fetch();

// include('views/front/details.php');
view(
    'front',
    'details',
    [
        'post' => $post
    ]
);