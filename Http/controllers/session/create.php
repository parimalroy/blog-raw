<?php

// view('session', 'create');

use core\Session;

view('session', 'create', [
    'errors' => Session::get('errors')
]);