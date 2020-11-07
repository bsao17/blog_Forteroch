<!--Comments form-->
<?php require_once("./views/TEMPLATES/accountBaseTemplate.php"); ?>
<section class="m-2 border border-light rounded" id="commentForm">
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
    </form>
    <hr class="border border-light w-50 mb-4">
    
</section>
