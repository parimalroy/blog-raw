<?php
// include("views/admin/profile.php");
use core\Database;
use core\App;

$db = App::resolve(Database::class);
$categories = $db->query('select * from categories')->get();
// dd($categories);
view('category', 'create', ['categories' => $categories]);