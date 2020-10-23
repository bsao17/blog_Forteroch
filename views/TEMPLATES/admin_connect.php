<?php  require("baseTemplate.php"); ?>

<section >
    <form action="?action=admin_connect" method="POST" class="d-flex flex-column justify-content-center m-2 border border-dark w-25 m-auto bg-light rounded p-2">
        <label for="admin_log" class="card bg-dark text-light p-1">Admin login
            <input type="text" name="admin_log">
        </label>
        <label for="admin_password" class="card bg-dark text-light p-1">Admin password
            <input type="password" name="admin_password" class="rounded">
        </label>
        <input type="submit" value="Go Admin" class="btn btn-warning border border-dark">
    </form>
</section>

<?php 
    require_once("footerView.php");
    if($request_status == true){
        echo $error;
    }
?>

