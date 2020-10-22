
<section class="m-2 border border-light rounded" id="commentForm">
    <form action="?action=getBillets" method="POST">
        <div class="form-group">
            <div class="m-2">
                <label for="firstname" class="text-light">Firstname</label>
                <input type="text" name="firstname" class="form-control">
            </div>
            <div class="m-2">
                <label for="lastname" class="text-light">Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <div class="m-2">
                <label for="comment" class="text-light">Comment</label>
                <textarea name="comment" id="comment"  cols="30" rows="5" class="form-control"></textarea>
            </div>
            <input type="submit" value="Send Comment" class="btn btn-outline-light m-2">
        </div>
    </form>
</section> <br><br><br>
