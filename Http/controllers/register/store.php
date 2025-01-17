<?php

use core\Database;
use core\App;
use core\Validator;
use core\Authenticator;
use Http\Forms\RegisterForm;
use core\Session;

$db = App::resolve(Database::class);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// $errors = [];

// if (!Validator::string($name, 4, 50)) {
//     $errors['name'] = 'Please provide a name of at least four characters.';
// }

// if (!Validator::email($email)) {
//     $errors['email'] = 'Please provide a valid email address.';
// }

// if (!Validator::string($password, 5, 255)) {
//     $errors['password'] = 'Please provide a password of at least five characters.';
// }
$form = new RegisterForm();
if ($form->validate($name, $email, $password)) {
    if ((new Authenticator)->Register($name, $email, $password)) {
        $_SESSION['status'] = 'Sign Up Success !';
        $_SESSION['status_code'] = 'success';
        redirect('/');
    }
    $_SESSION['status'] = 'your email is already exits !';
    $_SESSION['status_code'] = 'error';
    header('location: /create-user');
    // $form->error('email', 'your email is already exits');
}

// if (! empty($errors)) {
//     return view('register', 'create', [
//         'errors' => $errors
//     ]);
// }

Session::flash('errors', $form->errors());
Session::flash('old', [
    'name' => $_POST['name'],
    'email' => $_POST['email'],


]);

return redirect('/create-user');

// $user = $db->query('select * from users where email = :email', [
//     'email' => $email
// ])->fetch();

// if ($user) {
//     header('location: /');
//     exit();
// } else {
//     $db->query('INSERT INTO users(name,email, password) VALUES(:name,:email, :password)', [
//         'name' => $name,
//         'email' => $email,
//         'password' => password_hash($password, PASSWORD_BCRYPT),
//     ]);

//     $_SESSION['user'] = [
//         'email' => $email,
//         'name' => $name
//     ];

//     //login($user);
//     header('location: /');
//     exit();
// }