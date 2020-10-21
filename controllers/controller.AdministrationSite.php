<?php
require_once("./models/ManagerUser.php");

class AdministrationSite
{
    public function signin($request, $server)
    {
        $error = "";
        $signin_status = false;
        if ($server['REQUEST_METHOD'] == 'POST') {

            $login = htmlspecialchars(trim($_POST['login']));
            $password = htmlspecialchars(trim($_POST['password']));
            $repeat_password = htmlspecialchars(trim($_POST['repeat_password']));

            if (!empty($login) && !empty($password) && !empty($repeat_password)) {
                if ($password == $repeat_password) {
                    $user = new ManagerUser();
                    if ($user->signin($login, $password) == true) {
                        session_start();
                        $_SESSION['login'] = $login;
                        $_SESSION['logued'] = true;
                        $cookie_name = "user_login";
                        $cookie_value = $_SESSION['login'];
                        setcookie($cookie_name, $cookie_value, time() + (3600*24*365), "/");
                        header("location: ?action=getBillets");
                    } else {
                        $signin_status = true;
                        $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Error password !</pre>";
                    }
                } else {
                    $signin_status = true;
                    $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Error login or password !</pre>";
                }
            } else {
                $signin_status = true;
                $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Field does not empty !</pre>";
            }
        }
        require_once("./views/Connect.views.php");
    }

    public function signup($request, $server)
    {
        $signup_status = false;
        $error = "";
        $regex = "/[a-zA-Z0-9\-\_\@]{6,}/";
        if ($server['REQUEST_METHOD'] == 'POST') {
            $firstname = htmlspecialchars(trim($_POST['firstname']));
            $lastname = htmlspecialchars(trim($_POST['lastname']));
            $login = htmlspecialchars(trim($_POST['login']));
            $password = htmlspecialchars(trim($_POST['password']));
            $repeat_password = htmlspecialchars(trim($_POST['repeat_password']));
            $role = 'user';
            if (($password == $repeat_password) && preg_match($regex, $password) == 1) {
                if (!empty($firstname) && !empty($lastname) && !empty($login)) {
                    $userManager = new ManagerUser();
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $user = $userManager->signup($login, $firstname, $lastname, $password, $role);
                    if ($user == null) {
                        $error = "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>login Already exist !</pre>";
                    } else {
                        $signup_status = true;
                    }
                } else {
                    $error = "<pre class='text-center text-danger bg-warning m-auto w-50 rounded h4'>error, fields shouldn't empty</pre>";
                }
            } else {
                $error = "<pre class='text-center text-danger bg-warning m-2 h4'>error password<br>restart registration</pre>";
            }
        }
        require_once("./views/registerView.php");
    }

    public function admin()
    {
        require_once("./views/TEMPLATES/accessAdminView.php");
    }
}
