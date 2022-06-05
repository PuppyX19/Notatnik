<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('addNote', 'NotesController');
Routing::post('logout', 'SecurityController');
Routing::post('admin', 'AdminController');
Routing::get('notes', 'NotesController');
Routing::get('welcomePage', 'DefaultController');

Routing::run($path);