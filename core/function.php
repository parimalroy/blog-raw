<?php

function dd($x)
{
    echo "<pre>";
    var_dump($x);
    echo "</pre>";
}

function urls($url)
{
    return $_SERVER['REQUEST_URI'] == $url;
}

function view($sub_path, $path, $attribute = [])
{
    extract($attribute);
    require base_path("/views/{$sub_path}/{$path}.view.php");
}

function base_path($path)
{
    return BASE_PATH . $path;
}