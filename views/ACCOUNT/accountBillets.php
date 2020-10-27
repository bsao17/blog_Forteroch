<?php 
    require_once("./views/TEMPLATES/accountBaseTemplate.php"); 
?>
    <?php
        foreach($post as $value){
            echo "<a href='#{$value['ID']}' class='btn btn-light ml-2 mr-3'><span class='text-dark h4'>".$value['ID']."</span>"." | "
            ."<strong><u class='text-dark '>".$value['title']."</u></strong></a>";
        }
    ?>
</a>

<section class="m-2 p-2 border border-light rounded" id="billet">
    <?php
        foreach($post as $value){
            echo "<strong class='text-center text-light'>".$value['title']."</strong>";
            echo "<span class='card p-3' id='{$value['ID']}'>".$value['content']."<a href='#' class='btn btn-outline-light m-auto w-25'><span class='text-muted h4'><i class='fas fa-hand-point-up'></span></i></a></span><hr class='border border-light bg-danger p-2 rounded-pill'>";
        }
        
    ?>
</section>

<?php  
    require_once('./views/commentFormView.php');
    require_once("./views/commentDisplayView.php");
    require_once("./views/TEMPLATES/footerView.php");

?>