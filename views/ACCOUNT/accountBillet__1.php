<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<h3 class="m-2 text-light text-center border border-dark p-1 pl-4 bg-danger rounded-pill"><i class="fas fa-book"></i> : <?= $_GET['ID'];?> </h3>
<section class="bg-light ml-2 mr-2 mt-2 p-3 lead border border-light">
        <?php
            foreach ($post as $value) {
                echo "<div class='text-center h4'>".$value['title']."</div>";
                echo $value['content'];
            }
        ?>
</section>

<?php require_once("createComment.php"); ?>

<!--Comments display-->
<h3 class="text-light text-center border border-dark bg-danger load ml-2 mr-2 p-1 rounded-pill"><i class="fas fa-comment-dots"></i></h3>
<section class="  p-2">
    <h2 class="bg-light p-1 rounded-lg"><u>commentaires</u> :</h2>
<?php  
    foreach($comment as $com){
        echo "<div class='lead card my-2'><span class='bg-secondary rounded-top p-2 text-light'>".$com['user']." | ".$com['dateDb']."</span><br>".$com['contentsDb']."</div>";
    }
?>    

</section><br><br><br>


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
        <a href="?action=createBillets">
            <li>
                <p class="text-light"><span class="text-danger"><i class="fas fa-user-cog"></i> Admin</span></p>
            </li>
        </a>
    </ul>
</footer>