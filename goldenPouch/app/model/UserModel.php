<?php

class UserModel{
    /** @var PDO */
    private $db;

    /** @var Array */
    private $content = [];

    private $table = 'masterlogin';

    public function __construct($dbConn) {
        $this->db = $dbConn;
    }

    public function add($obj) {
        array_push($this->content, $obj);
    }

    public function auth($username, $password){
        $this->content = [];

        $stmt = $this->db->prepare("select * from $this->table where `username` = :username and `password` = :password limit 1");

        try{
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':password', $password);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
            return false;
        }catch(PDOException $e){
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }
    }

    public function create($username, $password, $email){

        $stmt =$this->db->prepare("insert into $this->table (`username`, `password`, `email`) 
            values (:username, :password, :email) ");

        try{
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':password', $password);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            return true;
        }catch(PDOException $e){
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }
    }
}
