<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Delete</title>
</head>

<body style="background-color: #22252A;">
    <div id="bloc_page">
        <div class="row p-3 mx-0">
            <div class="col-md-8 m-auto">
                <section class="card m-5 p-2">
                    <img src="../../PUBLIC/PICTURES/delete.webp" class="card-img-top w-75 m-auto" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Delete Billet and comment</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quisquam consectetur. Quia aspernatur laborum suscipit consequuntur reiciendis error ab qui dolore doloremque ea vel ducimus assumenda, magni soluta culpa sed aliquid recusandae, repellendus eius repudiandae perferendis voluptas repellat. Mollitia aliquid molestias repellendus soluta dicta excepturi culpa in, temporibus accusantium laboriosam?</p>
                        </div>
                    </div>
                </section>
            </div>
            <section>
                <h2 class="text-light text-center"><u>Billets</u><pre class="text-muted">Moderation</pre></h2>
                <div class="text-light border border-light m-5 p-3">
                    <?php
                    foreach ($billets as $bill) {
                        echo "<div class='h4 text-center'>" . $bill["title"] . "</div><br>" . $bill["content"] . "<br>";
                        echo "<a href='?action=delete&amp;ID={$bill['ID']}' class='btn btn-danger m-2'>Delete Billet</a><hr class='border border-danger'>";
                    }
                    ?>
                </div>
            </section>
        </div>
        
        <h2 class="text-light text-center"><u>Comments</u><pre class="text-muted">Moderation</pre></h2>
        <section class="text-light border border-light m-5 p-3">
            <?php
            foreach ($comments as $com) {
                echo $com["ID_billet"] . "<br>";
                echo $com["user"];
                echo "<div class=''>" . $com["contentsDb"] . "</div>";
                echo $com["dateDb"] . "<br>";
                echo "<a href='' class='btn btn-danger mt-2'>Delete comment</a><hr class='border border-danger mb-5'>";
            }
            ?>

        </section>
        <a href="?action=adList" class="btn btn-danger m-3">Return admin home</a>
    </div>
</body>

</html>