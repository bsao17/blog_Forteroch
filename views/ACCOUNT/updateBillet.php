<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Update</title>
</head>

<body style="background-color: #22252A;" class="w-100">
<section class="my-5 mx-0 d-flex justify-content-center">
    <div class="row w-100">
        <div class="col-8 card m-auto">
            <img src="../../PUBLIC\PICTURES\Update.svg" alt="" class="card-img-right bg-info rounded m-2">
            <div class="card-body rounded-lg">

                <div class="card-title">
                    <h4 class="text-center">Update Billet</h4>
                </div>

                <div class="card-text">
                    <p class="card p-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia deserunt quidem magnam pariatur facere. Rem quas accusantium ratione illum deserunt?
                    </p>
                </div>

                
            </div>
        </div>
    </div>
</section>

<!--Update Form-->
<section class="m-5 p-4 border border-light text-light rounded-lg bg-secondary">
    <form action="?action=updateBillets" method="POST" class="form-group">
        <label for="ID">ID :</label>
        <input type="number" name="ID" id="ID" class="form-control">
        <label for="title">Title : </label>
        <input type="text" name="title" id="title" class="form-control">
        <label for="content">Content : </label>
        <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
        <input type="submit" value="Update now" class="btn btn-light mt-4">
    </form>
</section>

<section class="m-4 text-light border border-light p-4">
    <div>
        <?php
            foreach($post as $value){
                echo "<div class='m-2 h4 text-dark text-center bg-light rounded-circle'>ID : ".$value["ID"]."</div>";
                echo "<div class=''>".$value["title"]."</div><br>";
                echo "<div>".$value["content"]."</div><hr class='border border-light'>";

            }
        ?>
    </div>
</section>

<a href="?action=adList" class="btn btn-danger m-3">Return admin home</a>
</body>

</html>