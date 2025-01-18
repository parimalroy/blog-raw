<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);
$user = $db->query('select * from users where id = :id ', ['id' => $_SESSION['user']['id']])->find();
// dd($users);
view('admin', 'profile', ['user' => $user]);