<?php
require_once("./models/ManagerUser.php");


class AdministrationSite
{
    public function signin($request, $server)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];
            
            if (!empty($login) && !empty($password) && !empty($repeat_password)) {
                if ($password == $repeat_password) {
                    $user = new ManagerUser();
                    if ($user->signin($login, $password) == null) {
                        
                    } else {
                        echo "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>Error login or password !</pre>";
                    }
                }else{
                    echo "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>Error login or password !</pre>";
                    header("location: ?action=signin");
                }
            }else {
                echo "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>Field does not empty !</pre>";
            }
            
        }
        require_once("./views/Connect.views.php");
    }

    public function signup($request, $server)
    {
        $signup_status = false;
        $error = "";
        if ($server['REQUEST_METHOD'] == 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];
            $role = 'user';
            if ($password == $repeat_password) {
                if (!empty($firstname) && !empty($lastname) && !empty($login)) {
                    $userManager = new ManagerUser();
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $user = $userManager->signup($login, $firstname, $lastname, $password, $role); 
                    if ($user == null) {
                        $error = "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>login Already exist !</pre>";
                        
                    }else{
                        $signup_status = true;
                    }
                } else {
                    echo "<pre class='text-center text-danger bg-warning m-auto w-50 rounded h4'>error, fields shouldn't empty</pre>";
                    die;
                }
            } else {
                echo "<pre class='text-center text-danger bg-warning m-2 h4'>error password<br>restart registration</pre>";
                die;
            }
        }
        require_once("./views/registerView.php");
    }

    public function admin()
    {
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require_once("./views/ACCOUNT/adminAccount.php");
    }
}
