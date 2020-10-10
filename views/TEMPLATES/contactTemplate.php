
<section class="border border-light m-2 rounded" id="contactForm">
    <form action="?action=sendmail" method="POST" class="d-flex flex-column align-items-center form-group">
        <label for="firstname"  class="m-2">Firstname :
            <input type="text" name="firstname" class="form-control">
        </label>
        <label for="lastname">Lastname :

            <input type="text" name="lastname" class="form-control">
        </label>
        <label for="mail">E-mail :

            <input type="email" name="mail" id="mail" class="form-control"> 
        </label>
        <textarea name="contentMail" id="contentMail" cols="30" rows="5" class="form-control">Content e-mail</textarea>
        <input type="submit" value="Send mail" class="btn btn-outline-light m-2">
    </form>
</section>