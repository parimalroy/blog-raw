<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);


$posts = $db->query('select * from posts order by id desc Limit 3')->fetchAll();
view('front', 'home', [
    'posts' => $posts
]);