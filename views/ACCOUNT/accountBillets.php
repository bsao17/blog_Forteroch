<?php require_once("./views/TEMPLATES/accountBaseTemplate.php"); ?>

<div class="text-center">
<?php
        foreach($post as $value){
            echo "<a href='#".$value['ID']."'><span class='text-danger h4 bg-light p-1 rounded-pill'>".$value['ID']."</span></a>"." | "; 
        }
    ?>
</div>
<section class="m-2 p-2 rounded border border-light text-dark h5" id="billets">
    <?php
        foreach($post as $value){
            echo "<div class='border border-dark bg-info m-4 p-2 rounded'><h4 class='text-center mb-0'><span class='text-danger bg-light p-1 rounded-pill' id='".$value['ID']."'>".$value['ID']."</span>"." | "
            ."<strong><u class='text-dark'>".$value['title']."</u></strong></h4><br>"
            ."<span class='card p-5 collapse'>".$value['content']."</span></div>";
        }
    ?>
</section>
