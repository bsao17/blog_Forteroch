<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>admin account</title>
</head>

<body style="background-color: #22252A;">
    <section class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100vh">
        <div class="row my-5 mx-0">
            <div class="col-sm-3 m-auto card p-1">
                <div class="card-body">
                    <img src="../../public/pictures/chapters1.jpg" class="card-img-top" alt="Livre ouvert/ open book">
                    <div class="card-title">
                        <h4>create Billet</h4>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur in hic modi est quasi non?
                        </p>
                    </div>
                    <a href="?action=createBillets"><button class="btn btn-outline-dark">Enter</button></a>
                </div>
            </div>

            <div class="col-sm-3 m-auto card p-1">
                <div class="card-body">
                    <img src="../../public/pictures/update.jpg" class="card-img-top" alt="">
                    <div class="card-title">
                        <h4>update Billet</h4>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur in hic modi est quasi non?
                        </p>
                    </div>
                    <a href="?action=updateBillets"><button class="btn btn-outline-dark">Enter</button></a>
                </div>
            </div>

            <div class="col-sm-3 m-auto card ">
                <div class="card-body">
                    <img src="../../public/pictures/delete.webp" class="card-img-top" alt="">
                    <div class="card-title">
                        <h4>Delete Billet</h4>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur in hic modi est quasi non?
                        </p>
                    </div>
                    <a href="?action=deleteBillets"><button class="btn btn-outline-dark">Enter</button></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div>
                <a href="?action=home" class="btn btn-danger">Return Home Site</a>
            </div>

        </div>
    </section>

    <!--bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>