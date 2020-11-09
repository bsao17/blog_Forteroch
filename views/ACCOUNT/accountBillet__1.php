<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<h3 class=" text-light text-center mb-0 p-1 pl-4 bg-dark"><i class="fas fa-book"></i> : <?= $_GET['ID'];?> </h3>
<section class="bg-light p-3 lead ">
        <?php
            foreach ($post as $value) {
                echo "<div class='text-center h4'>".$value['title']."</div>";
                echo $value['content'];
            }
        ?>
</section>

<?php require_once("createComment.php"); ?>


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