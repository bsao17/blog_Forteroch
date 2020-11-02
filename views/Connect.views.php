<?php  require("./views/TEMPLATES/baseTemplate.php"); ?>

<div id="login_form" class="d-flex flex-column align-items-center border border-light p-2 ml-2 mr-2 rounded">
    
    <form action="?action=signin" method="POST" class="border border-light rounded p-2" id="form">
        <table>
            <tr>
                <td class="text-light">Login :</td>
                <td><input type="text" name="login" id="login" class="rounded bg-form m-1"></td>
            </tr>
            <tr> 
                <td class="text-light">Password :</td>
                <td><input type="password" name="password" id="password" class="rounded bg-form m-1"></td>
            </tr>
            <tr>
                <td class="text-light">Repeat Password :</td>
                <td><input type="password" name="repeat_password" id="repeat_password" class="rounded bg-form m-1"></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td><button type="submit" class='btn btn-light text-dark'>Connect</button><br></td>
            </tr><br>
        </table><hr class="border border-light">
        
    </form>
    
    <form class=" rounded m-3 p-1 card">
        <table class="border border-light">
            <tr>
                <td>Create User Account :</td>
                <td><a href="<?= '?action=signup'; ?>" class="btn btn-warning border border-secondary ">Create</a></td>
            </tr>
        </table>

    </form>
<?php  
    if($signin_status === false){
        echo $error;
    }
?>
<?php 
    if(isset($_COOKIE['PHPSESSID'])){
        var_dump($_COOKIE["user_login"]); 
    }
    
    var_dump(__DIR__);
    var_dump(__FILE__);
    var_dump(__CLASS__);
    var_dump(spl_autoload_functions());
?>
</div><br><br><br><br><br><br><br>
<footer id="footer" class="w-100">
    <ul class="d-flex flex-wrap align-items-center m-auto m-1 justify-content-center w-50">
        <a href="https://www.facebook.com/brunoDevOps">
            <li class="text-light"><i class="fab fa-facebook-square"></i> Facebook</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-twitter-square"></i> Twitter</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-instagram"></i> Instagram</li>
        </a>
    </ul>
</footer>


