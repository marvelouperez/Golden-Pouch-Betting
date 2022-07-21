<?php
session_set_cookie_params (3600 , '/', 'localhost');
session_start();

// Database
require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/database/database.php';

//Controlers
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/UserController.php';

//Models
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/model/UserModel.php';

//Objects
$user = new UserController($dbConn);