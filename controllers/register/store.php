<?php

use core\Database;
use core\App;
use core\Validator;

$db = App::resolve(Database::class);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($name, 4, 50)) {
    $errors['name'] = 'Please provide a name of at least four characters.';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 5, 255)) {
    $errors['password'] = 'Please provide a password of at least five characters.';
}

if (! empty($errors)) {
    return view('register', 'create', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->fetch();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users(name,email, password) VALUES(:name,:email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);

    $_SESSION['user'] = [
        'email' => $email,
        'name' => $name
    ];

    login($user);
    header('location: /');
    exit();
}