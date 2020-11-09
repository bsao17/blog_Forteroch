<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/224ea7dbd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../PUBLIC/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="../../PUBLIC/FAVICONS/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../PUBLIC/FAVICONS/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../PUBLIC/FAVICONS/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../PUBLIC/FAVICONS/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../PUBLIC/FAVICONS/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../PUBLIC/FAVICONS/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../PUBLIC/FAVICONS/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../PUBLIC/FAVICONS/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../PUBLIC/FAVICONS/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../PUBLIC/FAVICONS/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../PUBLIC/FAVICONS/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../PUBLIC/FAVICONS/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../PUBLIC/FAVICONS/favicon-16x16.png">
    <link rel="manifest" href="../../PUBLIC/FAVICONS/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../PUBLIC\JS\main.js" async></script>
    <title>Jean Forteroche</title>
</head>

<body>
    <div class="globalBody position-relative">
        <header>
            <div class=" d-flex flex-column justify-content-center align-items-center m-0 border border-light" id="banner">
                <?php require("accountBarNav.php"); ?>
                <section class="text-dark w-25">
                    <h3 class="card card-light text-center"><?php echo strtoupper($_GET['action']); ?></h3>
                    <div class=" p-0 bg-success rounded mb-2">
                        <p class="h6 bg-light p-1 text-center m-1 border border-dark"><span class="h4 text-secondary"><i class="fas fa-user-circle"></i></span><span class="h4"> <strong><?= " | " . $_SESSION['login']; ?></strong> :Logued !</span></p>
                    </div>
                    <a href="<?php echo "?action=accueil";?>" class="btn btn-light mb-2 "><i class="fas fa-sign-out-alt"></i>deconnexion</a>
                </section>
            </div>

        </header>

    </div>
    <!--Bootstrap-->
    <section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </section>
</body>

</html>