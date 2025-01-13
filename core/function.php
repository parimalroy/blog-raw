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

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email'],
        'name' => $user['name'],
        'id' => $user['id'],
    ];

    session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];
    session_destroy();
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}