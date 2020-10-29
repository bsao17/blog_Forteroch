<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<h3 class="m-2 text-light text-center border border-dark p-1 pl-4 bg-danger rounded-pill"><i class="fas fa-book"></i> : <?php foreach ($post as $value) { echo $value['ID'];} ?> </h3>
<section class="card ml-2 mr-2 mt-2 p-2 border border-danger">
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