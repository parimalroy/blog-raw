<?php

use core\Session;

// view('register', 'create');

view('register', 'create', [
    'errors' => Session::get('errors'),
]);