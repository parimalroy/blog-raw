<?php

$title=$_POST['title'];
$autohor=$_POST['author'];
$publish_date=$_POST['publish_date'];
$content=$_POST['content'];
$category=$_POST['category'];

$config = require('config.php');
$db = new Database($config['database']);
$posts = $db->query("INSERT INTO posts(blog_title,author,publish_date,content,catagory)values
('$title','$autohor','$publish_date','$content','$category')");

if($posts){
    echo ' Data insert Sucess';
}else{
    echo 'Data insert faild Faild';
}

