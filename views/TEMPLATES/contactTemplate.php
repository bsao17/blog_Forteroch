<?php require("./views/TEMPLATES/accountBaseTemplate.php"); ?>
<section class="border border-light m-2 rounded" id="contactForm">
    <form action="?action=sendmail" method="POST" class="d-flex flex-column form-group text-light">
        <label for="firstname"  class="m-2">Firstname :
            <input type="text" name="firstname" class="form-control">
        </label>

        <label for="lastname" class="m-2">Lastname :
            <input type="text" name="lastname" class="form-control">
        </label>

        <label for="email" class="m-2">E-mail :
            <input type="email" name="mail" id="mail" class="form-control"> 
        </label>

        <label for="contentMail" class="m-2">Content :
            <textarea name="contentMail" id="contentMail" cols="30" rows="5" class="form-control"></textarea>
        </label>
        <input type="submit" value="Send mail" class="btn btn-outline-light m-2">
    </form>
</section><br><br><br>
<footer>
    <?php require_once("./views/TEMPLATES/footerView.php"); ?>
</footer>