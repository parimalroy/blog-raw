<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$categories = $db->query("SELECT * FROM categories")->fetchAll();

view('admin', 'create', [
    'categories' => $categories
]);
die();






















// include("views/admin/create.php");
view('admin', 'create');