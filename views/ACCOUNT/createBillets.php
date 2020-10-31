<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://cdn.tiny.cloud/1/6z70ayz8k7ro9p1qzgshed6dq2ebveufdl4tarlg5014w7l8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
  <title>Admin account</title>

  
</head>

<body class="bg-secondary my-2">
  <h1 class="d-flex align-items-center justify-content-around w-50 m-auto text-light mx-2 bg-info rounded border border-light">
    Billet
    <div class="btn-group m-2" role="group" aria-label="Button group with nested dropdown">
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Choose action
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <a class="dropdown-item" href="#">Create</a>
          <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>
      </div>
    </div>
  </h1>

  <!--Form TinyMCE-->
  <form action="?action=createBillets" method="POST" class="m-2 p-2 border border-light rounded bg-info">
    <label for="titleBillet" class="h4 text-light">Titre :
      <input type="text" name="titleBillet" placeholder="Votre titre ici" class="h5 w-100">
    </label>
    <textarea id="mytextarea" name="contentBillet" rows="20" placeholder="Contenu"></textarea>
    <input type="submit" value="New Billet" class="btn btn-light m-2">
    <button class="btn btn-danger m-2"><a href="?action=getBillets" class="text-light">Disconnect</a></button>
  </form>

  <section>

  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<?php var_dump($_SERVER); var_dump($_SESSION); ?>
</html>