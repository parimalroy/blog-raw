<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$category = $db->query("insert into categories(category_name) values(:category_name)", ["category_name" => $_POST['categories_name']]);
dd($category);
header('location: admin/create-category');