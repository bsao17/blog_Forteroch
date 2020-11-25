<?php

namespace models;

use PDO;

require __DIR__.'/../vendor/autoload.php';

class ManagerUser
{

    /**
     * @var DatabaseClass
     */
    private DatabaseClass $db;

    /**
     * @var PDO
     */
    private PDO $connection;


    /**
     * constructor method for database connection
     */
    public function __construct()
    {
        $this->db         = new DatabaseClass();
        $this->connection = $this->db->getConnection();
    }//end __construct()


    /**
     * Signup method
     *
     * @param  string $login
     * @param  string $firstname
     * @param  string $lastname
     * @param  string $password
     * @param  string $role
     * @return boolean $user
     */
    public function signup($login, $firstname, $lastname, $password, $role)
    {
        $sql = 'SELECT * FROM user WHERE login = :username';
        if ($req = $this->connection->prepare($sql)) {
            $req->bindParam(':username', $login, PDO::PARAM_STR);
            if ($req->execute()) {
                if ($req->rowCount() == 1) {
                    return null;
                } else {
                    $user = $this->connection->prepare('INSERT INTO user(login, firstname, lastname, password, role) VALUES (:login, :firstname, :lastname, :password, :role)');
                    $user->bindParam(':login', $login);
                    $user->bindParam(':firstname', $firstname);
                    $user->bindParam(':lastname', $lastname);
                    $user->bindParam(':password', $password);
                    $user->bindParam(':role', $role);
                    $user->execute();
                    return $user;
                }
            }
        }
    }//end signup()


    /**
     * Signin method
     *
     * @param  string $login
     * @param  string $password
     * @return boolean
     */
    public function signin($login, $password)
    {
        $sql = 'SELECT * FROM user WHERE login = :username ';
        if ($result = $this->connection->prepare($sql)) {
            $result->bindParam(':username', $login, PDO::PARAM_STR);
            if ($result->execute()) {
                if ($result->rowCount() == 1) {
                    $res           = $result->fetch();
                    $password_hash = $res['password'];
                    if (password_verify($password, $password_hash)) {
                        return true;
                    }
                }
            }
        }
    }//end signin()


    /**
     * Admin verify method
     *
     * @return boolean
     */
    public function adminVerify()
    {
        $sql = 'SELECT role FROM user WHERE login = :username';
        if ($result = $this->connection->prepare($sql)) {
            $result->bindParam(':username', $_COOKIE['user_login']);
            if ($result->execute()) {
                if ($result->rowCount() == 1) {
                    $req  = $result->fetch();
                    $role = $req['role'];
                    if ($role == 'admin') {
                        return true;
                    }
                }
            }
        }
    }//end adminVerify()
}//end class
