<?php

class ManagerBillets{
    private $host = "mysql:host = localhost; dbname = blogjeanforteroch; charset = utf8";
    private $login = "root";
    private $password = "";
    public $dtb;

    public function __construct($_host, $_login, $_password)
    {
        $this->_host = $host;
        $this->dtb = new PDO($_host, $_login, $_password);
    }

    public function display(){
    }
}