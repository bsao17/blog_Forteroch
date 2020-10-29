<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>

<section class="card m-2 p-2">
    <p>
    <?php
        foreach ($post as $value) {
            echo "<p class='h4 text-center'><strong><u>" . $value['title'] . "</u></strong></p>"; ?>
    </p>
    <article >
        <?= 
            "<span class='lead h5 p-3'>".$value['content']."</span>";
        }?>
    </article>
</section>
<?php require_once("./views/commentFormView.php"); ?>