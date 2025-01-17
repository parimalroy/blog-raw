<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::length($_POST['name'], 1, 150)) {
        $errors['name'] = 'required valid input';
    }

    if (!Validator::length($_POST['email'], 1)) {
        $errors['email'] = 'required valid email';
    }


    if (empty($errors)) {
        $user = $db->query("UPDATE  users SET name= :name ,email= :email where id=:id", [
            'id' => $_SESSION['user']['id'],
            'name'   => $_POST['name'],
            'email' => $_POST['email'],
        ]);
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['status'] = 'profile Update Success !';
        $_SESSION['status_code'] = 'success';
        header('location: /admin');
    }

    view('admin', 'profile', ['errors' => $errors]);
    header('location:/admin/blog/home-blog');
    exit();
}