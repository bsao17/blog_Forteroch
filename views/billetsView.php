<section class="m-2 p-2 border border-light rounded text-center" id="billet">
    <?php
        echo "<div>"."<span class='h4'>Chapter N° ".$post['ID']."</span><hr class='border border-dark'><strong class='h4 text-light bg-primary rounded p-1' id='billetTitle'>".$post['title']."</strong><br><br><span class='text-light'>".$post['content']."</span><hr class='border border-light'></div>";
    ?>
</section>