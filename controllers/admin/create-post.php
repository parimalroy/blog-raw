<?php
// $config = require('config.php');
use core\App;
use core\Database;
use core\Validator;

// $config = require base_path('config.php');
// $db = new Database($config['database']);
$db = App::resolve(Database::class);

$file_name = $_FILES['cover_photo']['name'];
// var_dump($file_name);
$tmpName = $_FILES['cover_photo']['tmp_name'];
$folder = BASE_PATH . 'public/images/' . $file_name;



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

    // photo upload


    $categories = $db->query("SELECT * FROM categories")->fetchAll();
    // dd($categories);
    // var_dump($file_name);
    if (empty($errors)) {
        $db->query("INSERT INTO posts(blog_title,author,publish_date,content,category_id,cover_photo)values
        (:title,:author,:publish_date,:content,:category_id,:cover_photo)", [
            'title'   => $_POST['title'],
            'author'       => $_POST['author'],
            'publish_date' => $_POST['publish_date'],
            'content'      => $_POST['content'],
            'category_id'     => $_POST['category_id'],
            'cover_photo'     => $file_name,
        ]);
        move_uploaded_file($tmpName, $folder);
    }
}
// require 'views/admin/create.php';
view('admin', 'create', [
    'errors' => $errors,
    'categories' => $categories
]);