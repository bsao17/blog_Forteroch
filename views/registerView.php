<?php require("./views/TEMPLATES/baseTemplate.php"); ?>
<div id="login_form" class="d-flex flex-column align-items-center border border-light p-2 ml-2 mr-2 mb-5 rounded">
    <h2 class='card card-light rounded p-1'>Créer un compte</h2>
<?php if($signup_status === true){
    echo "<pre class='text-center text-dark bg-success m-auto w-50 rounded h4'>votre compte à été créé</pre>";
}
if($error != "") {
    echo $error;
}
?>
    <form action="?action=signup" method="POST" class="border border-light rounded p-2 form-group" id="form">
        <table class="m-1">
            <tr>
                <td><label for="firstname" class="text-light">Prénom :</label></td>
                <td><input type="text" name="firstname" id="firstname" class="form-control m-1 bg-form"></td>
            </tr>
            <tr>
                <td><label for="lastname" class="text-light">Nom :</label></td>
                <td><input type="text" name="lastname" id="lastname" class="form-control m-1 bg-form"></td>
            </tr>
            <tr>
                <td><label for="login" class="text-light">Login :</label></td>
                <td><input type="text" name="login" id="login" class="form-control m-1 bg-form"></td>
            </tr>
            <tr>
                <td><label for="password" class="text-light">Password :</label></td>
                <td><input type="password" name="password" id="password" class="form-control m-1 bg-form"></td>
            </tr>
            <tr>
                <td><label for="repeat_password" class="text-light">Repeat Password :</label></td>
                <td><input type="password" name="repeat_password" id="Repeat_password" class="form-control m-1 bg-form"></td>
            </tr>
            <tr>
                <td><button type="submit" class='btn btn-light text-dark'>Créer un compte</button><br></td>
            </tr>
        </table>
    </form>
    <div class=" p-1">
        <pre class="text-center"><span class="text-danger h1"><i class="fas fa-exclamation-triangle"></i></strong></span><br> <u class="bg-warning">the password need contain at least 6 characters with letters,<br> numbers and signs such as :</u><span class="h4">[<span class="bg-warning h6"> _ - @ </span>] </span><br><span class="bg-warning"><u>and no spaces</u></span></pre>
    </div>
</div><br><br>
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



