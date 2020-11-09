<!--Comments form-->
<?php require_once("./views/TEMPLATES/accountBaseTemplate.php"); ?>
<section class=" border-bottom border-top" id="commentForm">
    <form action="?action=createcomment&amp;ID=<?= $_GET['ID'] ?>" method="POST">
        <div class="form-group">

            <div class="m-2">
                <input type="hidden" name="ID" id="ID" class="form-control" value="<?= intval($_GET["ID"]); ?> ">
            </div>

            <div class="m-2">
                <label for="comment" class="text-light">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <input type="submit" value="Send Comment" class="btn btn-outline-light m-2">
        </div>
    </form><hr class="border border-light w-50 m-auto">
    <h3 class="text-light text-center p-2 mb-0">Commentaires : <i class="fas fa-comment-dots"></i></h3>
    <?php
    foreach ($comment as $com) {
        echo "<div class='lead card mb-2 ml-1 mr-1 p-3'><span class='bg-secondary rounded-top p-2 text-light'>" . $com['user'] . " | " . $com['date'] . "</span><br><span class='mb-3'>" . $com['contentsDb'] . "</span>"
            . "<form action='' method='POST'><input type='submit' name='return' id='return' value='Signaler' class='btn btn-warning'></input></form></div>";
    }
    ?>
</section>