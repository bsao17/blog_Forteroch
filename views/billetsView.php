<section>
    <?php
        while($res = $req->fetch()){
            echo $res['title']."<br>".$res['content'];
        }
    ?>
</section>