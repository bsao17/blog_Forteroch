<div class="text-center chapter1 pt-2 border border-light m-2 rounded" id="chapter1">
        <a href="?action=getBillets">
            <?php 
            foreach($post as $billet){

                echo "<strong class='btn btn-light'>".$billet['ID']."</strong><br>";
                echo $billet['title']."<hr class='border border-light'>";
                
            }
            ?>
        </a>
    </div>