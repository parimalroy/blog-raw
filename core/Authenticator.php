<?php

namespace core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('select id,name,email,password from users where email = :email', [
                'email' => $email
            ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email,
                    'name' => $user['name'],
                    'id' => $user['id'],
                ]);

                return true;
            }
        }

        return false;
    }

    public function Register($name, $email, $password)
    {
        $db = App::resolve(Database::class);
        $user = $db->query('select * from users where email = :email', [
            'email' => $email
        ])->find();
        if ($user) {
            $_SESSION['status'] = 'your are old member!';
            $_SESSION['status_code'] = 'error';
            header('location: /create-user');
            exit();
        } else {
            $db->query('INSERT INTO users(name,email, password) VALUES(:name,:email, :password)', [
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_BCRYPT),
            ]);


            $_SESSION['user'] = [
                'email' => $email,
                'name' => $name,
                'id' => $user['id']


            ];
            $_SESSION['status'] = 'Blog created success !';
            $_SESSION['status_code'] = 'success';
        }
        return $this->logout();
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'name' => $user['name'],
            'id' => $user['id'],
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}