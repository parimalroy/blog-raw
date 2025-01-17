<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$posts = $db->query("select * from posts as p inner join categories as c on p.category_id=c.id where c.id= :id", ['id' => $_POST['category']])->fetchAll();
// dd($posts);
// header('location: /list');
view('front', 'list', ['posts' => $posts]);