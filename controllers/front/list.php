<?php

$config = require('config.php');
$db = new Database($config['database']);
$posts = $db->query('select * from posts')->fetchAll();

include('views/front/list.php');