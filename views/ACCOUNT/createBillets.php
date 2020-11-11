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

<body class="my-2" style="background-color: #22252A;">
<section>
  <h1 class="d-flex align-items-center justify-content-around text-light mx-2 bg-secondary border border-light">
    Create Billet :
  </h1>

  <!--Form TinyMCE-->
  <form action="?action=createBillets" method="POST" class="m-2 p-2 border border-light bg-secondary">
    <label for="titleBillet" class="h4 text-light w-50">Titre :
      <input type="text" name="titleBillet" placeholder="Votre titre ici" class="h5 w-100">
    </label>
    <textarea id="mytextarea" name="contentBillet" rows="20" placeholder="Contenu"></textarea>
    <input type="submit" value="New Billet" class="btn btn-light m-2">
  </form>
</section>

<div class="row w-100 m-auto">
  <div class="col-lg-12">
    <a href="?action=home" class="text-light"><button class="btn btn-danger m-2">Return Home Site</button></a>
  
    <section>
      <?php
      if (isset($empty)) {
        echo "<div class='text-center bg-warning text-danger w-25 m-auto h4 p-2 rounded-lg'>Fields Does Not Empty</div>";
      }
      ?>
    </section>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>