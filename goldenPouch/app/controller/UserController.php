<?php

class UserController {
    /** @var UserModel */
    private $user;

    public function __construct($dbConn) {
        $this->user = new UserModel($dbConn);
    }

    public function login($username, $password) {
        return $this->user->auth($username, $password);
    }

    public function saveUser($username, $password, $email){
        return $this->user->create($username, $password, $email);    
    }
}