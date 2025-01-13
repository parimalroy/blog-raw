<?php

use core\App;
use core\Database;

// $config = require base_path('config.php');
// $db = new Database($config['database']);
$db = App::resolve(Database::class);

$count = 0;


$delete = $db->query('delete from posts where id = :id', ['id' => $_POST['id']]);

if ($delete) {
    $count++;
    header("location:/admin");
    exit();
}