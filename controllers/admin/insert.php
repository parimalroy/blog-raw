<?php
$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if ((strlen($_POST['title']) < 1)) {
        $errors['title'] = 'title is required';
    }
    if (strlen($_POST['title']) > 200) {
        $errors['title'] = 'title is more then 200 characters';
    }
    if (strlen($_POST['author']) < 1) {
        $errors['author'] = 'author name is required';
    }
    if (strlen($_POST['publish_date']) < 1) {
        $errors['publish_date'] = 'publish date name is required';
    }
    if (strlen($_POST['content']) < 1) {
        $errors['content'] = 'content is required';
    }
    if (strlen($_POST['content']) > 1000) {
        $errors['content'] = 'content must less then 1000 characters';
    }

    if (empty($errors)) {
        $posts = $db->query("INSERT INTO posts(blog_title,author,publish_date,content,catagory)values
        (:title,:author,:publish_date,:content,:category)", [
            'blog_title'   => $_POST['title'],
            'author'       => $_POST['author'],
            'publish_date' => $_POST['publish_date'],
            'content'      => $_POST['content'],
            'category'     => $_POST['category'],
        ]);
    }
}
require 'views/admin/create.php';