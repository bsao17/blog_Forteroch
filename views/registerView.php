<?php require("./views/TEMPLATES/baseTemplate.php"); ?>
<div id="login_form" class="d-flex flex-column align-items-center border border-light p-2 ml-2 mr-2 rounded">
    <h2 class='card card-light rounded p-1'>Create User Account</h2>
    <form action="?action=signup" method="POST" class="border border-light text-light rounded p-2 form-group" id="form">
        <table>
            <tr>
                <td><label for="firstname">Firstname :</label></td>
                <td><input type="text" name="firstname" id="firstname" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="lastname">Lastname :</label></td>
                <td><input type="text" name="lastname" id="lastname" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="login">Login :</label></td>
                <td><input type="text" name="login" id="login" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" id="password" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="repeat_password">Repeat Password :</label></td>
                <td><input type="password" name="repeat_password" id="Repeat_password" class="form-control"></td>
            </tr>
            <tr>
                <td><button type="submit" class='btn btn-light text-dark'>Create account</button><br></td>
            </tr>
        </table>
    </form>
</div>
<?php if($signup_status == true){
    echo "<pre class='text-center text-dark bg-success m-auto w-50 rounded h4'>votre compte à été créé</pre>";
}
if($error != "") {
    echo $error;
}
?>