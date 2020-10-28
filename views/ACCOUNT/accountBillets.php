<?php 
    require_once("./views/TEMPLATES/accountBaseTemplate.php"); 
?>
    <?php
        foreach ($post as $value) {
            echo "<a href='#{$value['ID']}' class='btn btn-light ml-2 mr-3'><span class='text-dark h4'>".$value['ID']."</span>"." | "
            ."<strong><u class='text-dark '>".$value['title']."</u></strong></a>";
        } 
    ?>
</a>

<section class="m-2 p-2 border border-light rounded" id="billet">
    <h1 id="title"></h1>
    <p id="articles" class="card"></p>
    <p id="articles2" class="card"></p>
    
</section>

<script>
    const url = "?action=apidata/billets";
    let billetData = [];
    let articles = document.getElementById('articles')
    let articles2 = document.getElementById('articles2')
    let title = document.getElementById('title')
    fetch(url).then(response=>response.json()).then(billets=>{
      
        for( i = 0; i < billets.length; i++){
            billetData.push(billets[i]);
        }
        title.innerHTML = billetData[5].title
        articles.innerHTML = billetData[5].content
    });
    console.log(billetData);
    articles2.innerHTML = billetData;
</script>

<?php  
    require_once('./views/commentFormView.php');
    require_once("./views/commentDisplayView.php");
    require_once("./views/TEMPLATES/footerView.php");

?>