<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 7/31/2018
 * Time: 1:15 AM
 */

Class Accounts extends DB{
    public function __construct() {
        $dbConfig = array(
            "DB_DNS" => 'mysql:host=mysql.antrodo.com;port=3306;dbname=antrodo',
            "DB_USER" => 'antisa2',
            "DB_PASSWORD" => 'Antonio1'
        );
        parent::__construct($dbConfig);
    }
    public function signup($username, $password, $email, $name) {
        $db = $this->getDB();
        $stmt = $db->prepare("INSERT INTO tUsers SET username = :username, password = :password, email = :email, name = :name, created = NOW()");
        $binds = array(
            ":username" => $username,
            ":password" => password_hash($password, PASSWORD_DEFAULT),
            ":email" => $email,
            ":name" => $name
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
    public function login($username, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM tUsers WHERE username = :username LIMIT 1"); //select specific columns

        $binds = array(
            ":username" => $username
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password, $results['password'])){
                return $results['username'];
            }

        }
        return false;
    }
    function getUserInfo($username)
    {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT username, email, name, image FROM tUsers WHERE username = :username LIMIT 1"); //select specific columns

        $binds = array(
            ":username" => $username
        );

        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
           $results = $stmt->fetch(PDO::FETCH_ASSOC);
            return $results;
        }
        return false;


    }

    public function updateUserInfo($username, $password, $email, $name){
        $db = $this->getDB();
        $stmt = $db->prepare("UPDATE tUsers SET username = :username, password = :password, email = :email, name = :name WHERE username = :username LIMIT 1");
        $binds = array(
            ":username" => $username,
            ":password" => password_hash($password, PASSWORD_DEFAULT),
            ":email" => $email,
            ":name" => $name
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function uploadImage($image, $username){
        $db = $this->getDB();
        $stmt = $db->prepare("UPDATE tUsers SET image = :image WHERE username = :username LIMIT 1");
        $binds = array(
            ":image" => $image,
            ":username" => $username
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }


}