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
    <h1 class="text-center text-light w-50 m-auto bg-info rounded border border-light">Billet</h1>

    <!--Form TinyMCE-->
    <form action="?action=createBillets" method="POST" class="m-2 p-2 border border-light rounded bg-info">
      <label for="titleBillet" class="h4 text-light">Titre :
        <input type="text" name="titleBillet" placeholder="Votre titre ici" class="h5 w-100">
      </label>
      <textarea id="mytextarea" name="contentBillet" rows="20" placeholder="Contenu"></textarea>
      <input type="submit" value="New Billet" class="btn btn-light m-2">
      <button class="btn btn-danger m-2"><a href="?action=getBillets" class="text-light">Disconnect</a></button>
    </form>

</body>

</html>
