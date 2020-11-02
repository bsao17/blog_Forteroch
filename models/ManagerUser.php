<?php

require_once("./models/DatabaseClass.php");

class ManagerUser
{
    private $db;
    private $connection;
//Constructor
    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function signup($login, $firstname, $lastname, $password, $role)
    {
        $sql = "SELECT * FROM user WHERE login = :username";
        if ($req = $this->connection->prepare($sql)) {
            $req->bindParam(":username", $login, PDO::PARAM_STR);
            if ($req->execute()) {
                if ($req->rowCount() == 1) {
                    return null;
                } else {
                    $user = $this->connection->prepare("INSERT INTO user(login, firstname, lastname, password, role) VALUES (:login, :firstname, :lastname, :password, :role)");
                    $user->bindParam(":login", $login);
                    $user->bindParam(":firstname", $firstname);
                    $user->bindParam(":lastname", $lastname);
                    $user->bindParam(":password", $password);
                    $user->bindParam(":role", $role);
                    $user->execute();
                    return $user;
                }
            }
        }
    }
//Signin controller
    public function signin($login, $password)
    {
        $sql = "SELECT * FROM user WHERE login = :username ";
        if ($result = $this->connection->prepare($sql)) {
            $result->bindParam(":username", $login, PDO::PARAM_STR);
            if ($result->execute()) {
                if ($result->rowCount() == 1) {
                    $res = $result->fetch();
                    $password_hash = $res['password'];
                    if (password_verify($password, $password_hash)){
                        return true;
                    }
                }
            }
        }
    }

    public function adminVerify()
    {
        $sql = "SELECT role FROM user WHERE login = :username";
        if ($result = $this->connection->prepare($sql)) {
            $result->bindParam(":username", $_COOKIE["user_login"]);
            if ($result->execute()) {
                if ($result->rowCount() == 1) {
                    $req = $result->fetch();
                    $role = $req['role'];
                    if ($role == "admin") {
                        return true;
                    }
                }
            }
        }
    }
}
