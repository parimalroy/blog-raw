<?php

namespace Http\Forms;

use Core\Validator;

class RegisterForm
{
    protected $errors = [];

    public function validate($name, $email, $password)
    {
        if (!Validator::string($name)) {
            $this->errors['name'] = 'Please provide a valid name address.';
        }
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($password)) {
            $this->errors['password'] = 'Please provide at least 5 charcter.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}