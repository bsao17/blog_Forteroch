<?php
require_once("./models/ManagerUser.php");

class AdministrationSite{
    public function signin(){
        require("./views/TEMPLATES/baseTemplate.php");
        $user = new ManagerUser();
        $user->signin();
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
            if($password == $repeat_password){
                if(!empty($firstname) && !empty($lastname)){
                    $newUser = new ManagerUser();
                    $newUser->signup($login, $firstname, $lastname, $password, $role);
                }
            }else{
                echo "<pre class='text-center text-danger bg-warning m-2 h4'>error password<br>restart registration</pre>";
                die;
            }
            
        }
        require_once("./views/createUserView.php");
    }

    public function admin(){
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require_once("./views/ACCOUNT/adminAccount.php");
    }
}