<?php

use core\App;
use core\Session;
use core\Database;

$db = App::resolve(Database::class);

$categories = $db->query("SELECT * FROM categories")->get();
view('blog', 'create', [
    'errors' => Session::get('errors'),
    'categories' => $categories
]);

// view('blog', 'create', [
//     'categories' => $categories
// ]);
die();






















// include("views/admin/create.php");
view('admin', 'create');