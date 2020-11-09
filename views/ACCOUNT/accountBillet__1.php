<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<h3 class=" text-light text-center p-1 pl-4 bg-dark border-bottom border-light"><i class="fas fa-book"></i> : <?= $_GET['ID'];?> </h3>
<section class="bg-light p-3 lead border border-light">
        <?php
            foreach ($post as $value) {
                echo "<div class='text-center h4'>".$value['title']."</div>";
                echo $value['content'];
            }
        ?>
</section>

<?php require_once("createComment.php"); ?>

<!--Comments display-->
<h3 class="text-light text-center bg-dark border-bottom border-light load p-1"><i class="fas fa-comment-dots"></i></h3>
<section class=" ">
    <h2 class="bg-light p-1"><u>commentaires</u> :</h2>
<?php  
    foreach($comment as $com){
        echo "<div class='lead card mb-2 ml-1 mr-1'><span class='bg-secondary rounded-top p-2 text-light'>".$com['user']." | ".$com['date']."</span><br>".$com['contentsDb']."</div>";
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