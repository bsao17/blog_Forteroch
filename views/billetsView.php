<section class="m-2 border border-light bg-info rounded text-center">
    <?php
        require_once("./models/ManagerBillets.php");
        while($res = $result->fetch()){
            echo "<strong class='h4'><u>".$res['title']."</u></strong>"."<br>".$res['content'];
        }
    ?>
</section>