<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (! empty($errors)) {
    return view('session', 'create', [
        'errors' => $errors
    ]);
}

$user = $db->query('select id,name,email,password from users where email = :email', [
    'email' => $email,
])->fetch();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
            'name' => $user['name'],
            'id' => $user['id'],

        ]);

        header('location: /');
        exit();
    }
}

return view('session', 'create', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);