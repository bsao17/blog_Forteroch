<?php 

require_once("./models/DatabaseClass.php");
class ManagerUser{
     
     private $db;
     private $connection;

     public function __construct(){
          $this->db = new Database();
          $this->connection = $this->db->getConnection();
     }
     
     public function signup($login, $firstname, $lastname, $password, $role){
          $user = $this->connection->prepare("INSERT INTO user(login, firstname, lastname, password, role) VALUES (:login, :firstname, :lastname, :password, :role)");
          $user->bindParam(":login", $login);
          $user->bindParam(":firstname", $firstname);
          $user->bindParam(":lastname", $lastname);
          $user->bindParam(":password", $password);
          $user->bindParam(":role", $role);
          $user->execute();
          return $user;

     }

     public function signin(){
          $user = $this->connection->query("SELECT login, password FROM user");
          $result = $user->fetchAll();
          return $result;
     }
     
}