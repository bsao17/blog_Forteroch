
<section class="home border border-light m-2 rounded" id="home">
    <h1>Welcome On My Blog</h1><hr>
    <h2>Présentation</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Esse eius ea laboriosam, architecto est doloribus ad? Quidem fugiat quo nesciunt nisi non. Accusantium, at? Consequuntur, dolore. 
        Esse, inventore dolorum sequi iusto eos numquam id qui, accusamus non maxime dolore sit commodi quibusdam rerum ab, 
        praesentium veniam alias sapiente voluptates debitis.
    </p>
    <div class="text-center chapter1" id="chapter1">
        <a href="?action=billets">
            <?php 
            foreach($post as $value){

                echo $value['title']."<br>";
                echo $value['content']."<hr>";
            }
            ?>
        </a>
    </div>
</section>