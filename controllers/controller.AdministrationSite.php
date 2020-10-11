<?php

class AdministrationSite{
    public function login(){
        require_once("./views/Connect.views.php");
    }

    public function signup($request, $server){
        if($server['REQUEST_METHOD'] == 'POST'){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];
            $role = 'user';
            var_dump($request);
            var_dump($server);
            die;
        }
        require_once("./views/createUserView.php");
    }
}