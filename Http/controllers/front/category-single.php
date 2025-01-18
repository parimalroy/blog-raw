<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$categories = $db->query('select * from categories as c inner join posts as p on c.id=p.category_id where p.category_id=' . $_GET['id'])->get();

view('front', 'category-single', [
    'categories' => $categories
]);