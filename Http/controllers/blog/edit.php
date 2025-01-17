<?php

use core\App;
use core\Database;
use core\Validator;


$db = App::resolve(Database::class);

$post = $db->query("select* from posts where id = :id", ['id' => $_GET['id']])->fetch();

$cate = $db->query("SELECT c.id, p.id, c.category_name FROM posts p INNER JOIN categories c ON p.category_id = c.id where p.id= :id", ['id' => $_GET['id']])->fetch();
// dd($cate);

$categores = $db->query("select * from categories")->fetchAll();

// dd($cate);

view('blog', 'edit', ['post' => $post, 'cate' => $cate, 'categores' => $categores]);