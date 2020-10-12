<?php

class AdministrationSite{
    public function signin(){
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/Connect.views.php");
    }

    public function signup($request, $server){
        require("./views/TEMPLATES/baseTemplate.php");
        if($server['REQUEST_METHOD'] == 'POST'){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];
            $role = 'user';
            die;
        }
        require_once("./views/createUserView.php");
    }
}