<?php
// $config = require('config.php');
use core\App;
use core\Session;
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
    // if (!Validator::length($_POST['author'], 1)) {
    //     $errors['author'] = 'author is required';
    // }
    if (!Validator::length($_POST['publish_date'], 1)) {
        $errors['publish_date'] = 'publish date is required';
    }
    if (!Validator::length($_POST['content'], 1, 1500)) {
        $errors['content'] = 'content is required and not more then 1500 characters';
    }
    // if (!Validator::length($_POST['category_id'], 1, 100)) {
    //     $errors['category_id'] = 'category is required';
    // }
    if (!Validator::length($file_name, 1, 100)) {
        $errors['cover_photo'] = 'Cover Photo is required';
    }

    // photo upload


    $categories = $db->query("SELECT * FROM categories")->fetchAll();
    // dd($categories);
    // var_dump($file_name);
    if (empty($errors)) {
        $db->query("INSERT INTO posts(blog_title,author,publish_date,content,category_id,cover_photo,users_id)values
        (:title,:author,:publish_date,:content,:category_id,:cover_photo,:users_id)", [
            'title'   => $_POST['title'],
            'author'       => $_SESSION['user']['name'],
            'publish_date' => $_POST['publish_date'],
            'content'      => $_POST['content'],
            'category_id'     => $_POST['category_id'],
            'cover_photo'     => $file_name,
            'users_id' => $_SESSION['user']['id']
        ]);
        move_uploaded_file($tmpName, $folder);
        $_SESSION['status'] = 'Blog created success !';
        $_SESSION['status_code'] = 'success';
        return redirect('/admin/blog/home-blog');
    }
}
// require 'views/admin/create.php';
// view('blog', 'create', [
//     'errors' => $errors,
//     'categories' => $categories
// ]);

Session::flash('errors', $errors);
Session::flash('old', [
    'title' => $_POST['title'],
]);
return redirect('/admin/blog/create-blog');