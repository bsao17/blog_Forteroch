<section class="m-2 border border-light rounded" id="commentForm">
    <form action="#" method="POST">
        <div class="form-group">
            
            <div class="m-2">
                <label for="login" class="text-light">Login</label>
                <input type="text" name="login" class="form-control">
            </div>

            <div class="m-2">
                <label for="comment" class="text-light">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <input type="submit" value="Send Comment" class="btn btn-outline-light m-2">
        </div>
    </form>
    <hr class="border border-light w-50 mb-4">
    <section>
        <?php require_once("commentDisplayView.php"); ?>
    </section>
</section>