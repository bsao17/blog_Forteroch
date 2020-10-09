
<section class="home border border-light m-2 rounded" id="home">
    <h1>Welcome On My Blog</h1><hr>
    <h2>Présentation</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Esse eius ea laboriosam, architecto est doloribus ad? Quidem fugiat quo nesciunt nisi non. Accusantium, at? Consequuntur, dolore. 
        Esse, inventore dolorum sequi iusto eos numquam id qui, accusamus non maxime dolore sit commodi quibusdam rerum ab, 
        praesentium veniam alias sapiente voluptates debitis.
        <img src="../PUBLIC/PICTURES/sky.jpg" alt="" class="picture">
    </p>
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
</section>