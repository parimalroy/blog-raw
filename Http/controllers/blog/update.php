<?php

use core\App;
use core\Database;
use core\Validator;
use core\Response;


$db = App::resolve(Database::class);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::length($_POST['blog_title'], 1, 150)) {
        $errors['blog_title'] = 'title is required and not more then 150 characters';
    }


    if (!Validator::length($_POST['publish_date'], 1)) {
        $errors['publish_date'] = 'publish date is required';
    }
    if (!Validator::length($_POST['content'], 1, 1500)) {
        $errors['content'] = 'content is required and not more then 1500 characters';
    }


    if (empty($errors)) {
        $update = $db->query("UPDATE  posts SET blog_title= :blog_title ,publish_date= :publish_date,content= :content, category_id= :category_id WHERE id=:id ", [
            'id' => $_POST['pid'],
            'blog_title'   => $_POST['blog_title'],
            'publish_date' => $_POST['publish_date'],
            'content'      => $_POST['content'],
            'category_id'     => $_POST['category_id'],
        ]);
    }
    $_SESSION['status'] = 'Blog Update Success !';
    $_SESSION['status_code'] = 'success';

    header('location:/admin/blog/home-blog');
    exit();
}