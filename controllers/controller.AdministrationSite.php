<?php
require_once "./models/ManagerUser.php";
require_once "./models/ManagerBillets.php";
require_once "./models/ManagerComment.php";

class AdministrationSite
{
    /**
     * Signin Method
     * @param mixed $request
     * @param mixed $server
     */
    public function signin($request, $server)
    {
        $error = '';
        $signin_status = "";
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
                        setcookie($cookie_name, $cookie_value, time() + (3600 * 24 * 365), "/");
                        header("location: ?action=home");
                    } else {
                        $signin_status = false;
                        $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Error password !</pre>";
                    }
                } else {
                    $signin_status = false;
                    $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Error not same password !</pre>";
                }
            } else {
                $signin_status = false;
                $error = "<pre class='text-center text-danger bg-warning w-25 m-auto rounded'>Field does not empty !</pre>";
            }
        }
        include_once "./views/Connect.views.php";
    }

    /**
     * Signup Method
     * @param mixed $request
     * @param mixed $server
     */
    public function signup($request, $server)
    {
        $signup_status = false;
        $error = "";
        $regex = "/[a-zA-Z0-9\-\_\@]{6,}/";
        if ($server["REQUEST_METHOD"] == 'POST') {
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
                        $error = "<pre class='text-center text-danger bg-warning rounded-lg m-2 p-2 h4'>login Already exist</pre>";
                    } else {
                        $signup_status = true;
                    }
                } else {
                    $error = "<pre class='text-center text-danger bg-warning rounded-lg m-2 p-2 h4'>error, fields shouldn't empty</pre>";
                }
            } else {
                $error = "<pre class='text-center text-danger bg-warning m-2 p-2 h4 rounded-lg'>error password<br>restart registration</pre>";
            }
        }
        include_once "./views/registerView.php";
    }

    /**
     * Admin account
     */
    public function admin()
    {
        if (isset($_COOKIE["user_login"])) {
            $user = new ManagerUser();
            if ($user->adminVerify() == true) {
                session_start();
                include_once "./views/ACCOUNT/accountAdmin.php";
            } else {
                header("location: ?action=home");
            }
        } else {
            header("location: ?action=signin");
        }
    }

    /**
     * Create new billets
     */
    public function createBillet()
    {
        if (isset($_COOKIE["user_login"])) {
            $user = new ManagerUser();
            if ($user->adminVerify() == true) {
                session_start();
                if (isset($_POST["titleBillet"]) && isset($_POST["contentBillet"])) {
                    $title = $_POST["titleBillet"];
                    $content = $_POST["contentBillet"];
                    $empty = false;
                    $billet = new ManagerBillets();
                    if (!empty($title) && !empty($content)) {
                        $billet->createBillet($title, $content);
                    } else {
                        $empty = true;
                    }
                }
                include_once "./views/ACCOUNT/createBillets.php";
            } else {
                header("location: ?action=home");
            }
        } else {
            header("location: ?action=signin");
        }
    }

    /**
     * update billet
     */
    public function updateBillet()
    {
        if (isset($_COOKIE["user_login"])) {
            $user = new ManagerUser();
            if ($user->adminVerify()) {
                session_start();
                $billet = new ManagerBillets();
                $post = $billet->getBillet();
                if (!empty(isset($_POST["ID"])) && isset($_POST["title"]) && isset($_POST["content"])) {
                    $billet->updateBillet($_POST["ID"], $_POST["title"], $_POST["content"]);
                }
                include_once "./views/ACCOUNT/updateBillet.php";
            }
        }
    }

    /**
     * Post new comment
     */
    public function createComment()
    {
        $user = htmlspecialchars(trim($_COOKIE['user_login']));
        $IDbillet = htmlspecialchars($_POST["ID"]);
        $comment = htmlspecialchars(trim($_POST["comment"]));
        if (!empty($comment)) {
            $newComment = new ManagerComment();
            $newComment->createComment($IDbillet, $user, $comment);
        } else {
        }
        header("location: ?action=simplebillet&ID=" . $IDbillet);
    }

    /**
     * Comment notify
     */
    public function commentReport()
    {
        $comment = new ManagerComment();
        $comment->commentReport($_GET["ID"]);
        include_once "./views/ACCOUNT/notifyConfirm.php";
    }

    /**
     * Admin billet and comment delete page
     */
    public function deleteBillet()
    {
        if (isset($_COOKIE["user_login"])) {
            $user = new ManagerUser();
            if ($user->adminVerify()) {
                $billet = new ManagerBillets();
                $billets = $billet->getBillet();
                $comment = new ManagerComment();
                $comments = $comment->getCommentsNotify();
                include_once "./views/ACCOUNT/deleteBillet.php";
            }
        }
    }

    /**
     * Billet delete action
     */
    public function delete()
    {
        $billet = new ManagerBillets();
        $request = $billet->deleteBillet($_GET["ID"]);
        header("location: ?action=deleteBillets");
    }

    /**
     * Billet delete comment action
     */
    public function deleteComment()
    {
        $comment = new ManagerComment();
        $comment->deleteComment($_GET["ID"]);
        header("location: ?action=deleteBillets");
    }

    /**
     * Billet confirm comment action
     */
    public function confirmComment()
    {
        $comment = new ManagerComment();
        $comment->confirmComment($_GET["ID"]);
        header("location: ?action=deleteBillets");
    }
}
