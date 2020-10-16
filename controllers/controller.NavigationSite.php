<?php
require("./models/ManagerBillets.php");
require("./models/ManagerComment.php");
require_once("ControllerAbstract.php");

class NavigationSite extends Controller{
    public function accueil(){
        require("./views/TEMPLATES/baseTemplate.php");
        require("./views/accueilView.php");
    }
    
    public function home(){
        
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require("./views/ACCOUNT/accountHome.php");
    }
    
    public function getbillet(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require("./views/TEMPLATES/accountBaseTemplate.php");
            
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];
            
            if (!empty($login) && !empty($password) && !empty($repeat_password)) {
                if ($password == $repeat_password) {
                    $user = new ManagerUser();
                    if ($user->signin($login, $password) == null) {
                        $billets = new ManagerBillets();
                        $post = $billets->getBillet();
                        require_once("./views/ACCOUNT/accountBillets.php");
                        require_once("views/commentFormView.php");
                    } else {
                        echo "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>Error login or password !</pre>";
                    }
                }
            } else {
                echo "<pre class='text-center text-danger bg-warning w-50 m-auto rounded'>Field does not empty !</pre>";
            }
            
        }else{
            echo "404 not found";
            die;
        }
        
    }

    public function addComment(){
        require("./views/TEMPLATES/baseTemplate.php");
        $comment = new ManagerComment;
        $comment->postComment();
    }

    public function biography(){
        
        require_once("./views/TEMPLATES/accountBaseTemplate.php");
        require_once('./views/ACCOUNT/accountBiography.php');
    }

    public function contact(){
        
        require("./views/TEMPLATES/accountBaseTemplate.php");
        require_once("./views/TEMPLATES/contactTemplate.php");
    }

    public function sendMail(){
        
        require("./views/TEMPLATES/baseTemplate.php");
        require_once("./views/TEMPLATES/sendMailView.php");
    }
}