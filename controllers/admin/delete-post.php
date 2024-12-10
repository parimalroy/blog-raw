<?php

use core\App;
use core\Database;

// $config = require base_path('config.php');
// $db = new Database($config['database']);
$db = App::resolve(Database::class);


$delete = $db->query('delete from posts where id = :id', ['id' => $_POST['id']]);

if ($delete) {
    header("location:/admin");
}