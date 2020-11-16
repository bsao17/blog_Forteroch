<?php
require_once "./views/templates/accountBaseTemplate.php";
?>
<h3 class=" text-light text-center mb-0 p-1 pl-4 bg-dark"><i class="fas fa-book"></i> : <?= $_GET['ID']; ?> </h3>
<section class="bg-light p-3 lead ">
    <?php
    foreach ($post as $value) {
        echo "<div class='text-center h4'>" . $value['title'] . "</div>";
        echo $value['content'];
    }
    ?>
</section>

<?php require_once "createComment.php"; ?>

<footer>
    <?php require_once "./views/templates/footerView.php"; ?>
</footer>