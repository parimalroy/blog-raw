<?php
// include("views/front/home.php");
use core\App;
use core\Database;

$db = App::resolve(Database::class);
$categories = $db->query('SELECT * FROM categories')->fetchAll();
// dd($categories);

$counts = $db->query("select category_name, count(category_id)from categories as c inner join posts as p on c.id=p.category_id where p.category_id=c.id group by category_name")->fetchAll();
// dd($counts);
// dd($count['count(category_id)']);
view('front', 'category', [
    'categories' => $categories,
    'counts' => $counts

]);