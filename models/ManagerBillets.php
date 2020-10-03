<?php

class ManagerBillets{
    private $host;
    private $login;
    private $password;

    public function __construct($_host, $_login, $_password)
    {
        $this->host = $_host;
        $this->login = $_login;
        $this->password = $_password;
    }

    public function display(){
        
    }
}