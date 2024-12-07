<?php
// $config = require('config.php');
use core\Database;
use core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::length($_POST['title'], 1, 150)) {
        $errors['title'] = 'title is required and not more then 150 characters';
    }
    if (!Validator::length($_POST['author'], 1)) {
        $errors['author'] = 'author is required';
    }
    if (!Validator::length($_POST['publish_date'], 1)) {
        $errors['publish_date'] = 'publish date is required';
    }
    if (!Validator::length($_POST['content'], 1, 1500)) {
        $errors['content'] = 'content is required and not more then 1500 characters';
    }



    if (empty($errors)) {
        $db->query("INSERT INTO posts(blog_title,author,publish_date,content,catagory)values
        (:title,:author,:publish_date,:content,:category)", [
            'title'   => $_POST['title'],
            'author'       => $_POST['author'],
            'publish_date' => $_POST['publish_date'],
            'content'      => $_POST['content'],
            'category'     => $_POST['category'],
        ]);
    }
}
// require 'views/admin/create.php';
view('admin', 'create', [
    'errors' => $errors
]);