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

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($sub_path, $path, $attribute = [])
{
    extract($attribute);
    require base_path("/views/{$sub_path}/{$path}.view.php");
}



function redirect($path)
{
    header("location: {$path}");
    exit();
}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}