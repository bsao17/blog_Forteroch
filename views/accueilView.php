<?php require("./views/templates/baseTemplate.php"); ?>
<section class="home border border-light p-5" id="home">
    <h1 class="text-center">Welcome On My Blog</h1>
    <hr>
    <h2 class="pl-4"><u>Présentation</u> </h2>
    <p class=" p-4 text-justify">
        <img src="../public/pictures/sky.jpg" alt="" id="picture-accueil" class="img-fluid img-thumbnail w-25 mr-4 rounded float-left" alt="Responsive image">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Esse eius ea laboriosam, architecto est doloribus ad? Quidem fugiat quo nesciunt nisi non. Accusantium, at? Consequuntur, dolore.
        Esse, inventore dolorum sequi iusto eos numquam id qui, accusamus non maxime dolore sit commodi quibusdam rerum ab,
        praesentium veniam alias sapiente voluptates debitis.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Esse eius ea laboriosam, architecto est doloribus ad? Quidem fugiat quo nesciunt nisi non. Accusantium, at? Consequuntur, dolore.
        Esse, inventore dolorum sequi iusto eos numquam id qui, accusamus non maxime dolore sit commodi quibusdam rerum ab,
        praesentium veniam alias sapiente voluptates debitis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, perferendis ipsam ullam delectus qui cumque quidem alias ipsum est.
        Pariatur facere quia voluptatibus eos itaque, impedit cumque possimus consectetur eveniet.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, laborum tempore enim officiis expedita magni magnam quisquam minima cum,
        alias fuga error neque veritatis eos officia dicta sapiente ipsam animi excepturi exercitationem! Adipisci tenetur, pariatur vel cum soluta perspiciatis
        autem asperiores doloremque eum aperiam, consequuntur numquam quia nesciunt consectetur magni, dolorum cupiditate! Delectus accusamus voluptatum
        distinctio perspiciatis corporis quo, pariatur voluptas illo nisi quasi minus quod neque similique placeat. Autem non ex sed illo dolore.
    </p>
    <hr>

    <div id="carousel" class="carousel slide w-50 h-auto m-auto card p-2 rounded-lg" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../public/pictures/landscape (2).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/pictures/landscape (3).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/pictures/landscape (4).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/pictures/landscape (5).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../PUBLIC\PICTURES\wilderness-bear.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../PUBLIC\PICTURES\snow-winter-dog.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br>
</section>

<footer id="footer" class="w-100">
    <ul class="d-flex flex-wrap align-items-center m-auto m-1 justify-content-center w-50">
        <a href="https://www.facebook.com/brunoDevOps">
            <li class="text-light"><i class="fab fa-facebook-square"></i> Facebook</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-twitter-square"></i> Twitter</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-instagram"></i> Instagram</li>
        </a>
    </ul>
</footer>
<?php

?>