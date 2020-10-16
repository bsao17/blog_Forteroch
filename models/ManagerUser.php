<?php

require_once("./models/DatabaseClass.php");
class ManagerUser
{

     private $db;
     private $connection;

     public function __construct()
     {
          $this->db = new Database();
          $this->connection = $this->db->getConnection();
     }

     public function signup($login, $firstname, $lastname, $password, $role)
     {
          $sql = "SELECT * FROM user WHERE login = :username";
          if($req = $this->connection->prepare($sql)){
               $req->bindParam(":username", $login, PDO::PARAM_STR);
               if($req->execute()){
                    if($req->rowCount() == 1){
                         return null;
                    }else{
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

     public function signin($login, $password)
     {
          $sql = "SELECT * FROM user WHERE login = :login && password = :password";
          if($req = $this->connection->prepare($sql)){
               $req->bindParam(":login", $login, PDO::PARAM_STR);
               $req->bindParam(":password", $password, PDO::PARAM_STR);
               if($req->rowCount() == 2){
                    return true;
               }
          }
     }
}
