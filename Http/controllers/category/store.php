<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::length($_POST['categories_name'], 1, 50)) {
        $errors['categories_name'] = 'requred valid category';
    }

    $category_name = strtolower($_POST['categories_name']);
    $category_capital = ucwords($category_name);

    $exits_Category = $db->query('select * from categories where category_name = :category_name', ['category_name' => $category_capital])->fetchAll();
    if (!$exits_Category) {
        if (empty($errors)) {
            $db->query("insert into categories(category_name) values(:category_name)", ["category_name" => $category_capital]);
            header('location: /admin/category/create-category');
        }
        $_SESSION['status'] = 'Category created success !';
        $_SESSION['status_code'] = 'success';
        header('location: /admin/category/create-category');
        exit();
    } else {
        $_SESSION['status'] = 'Category already exits !';
        $_SESSION['status_code'] = 'error';
        header('location: /admin/category/create-category');
        exit();
    }
}




view('category', 'create', ['errors' => $errors]);