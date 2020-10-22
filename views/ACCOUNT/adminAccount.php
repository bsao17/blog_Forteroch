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
    <h1 class="text-center w-50 m-auto bg-info rounded border border-light">Billet</h1>

    <form action="" method="POST" class="m-2 p-2 border border-light rounded bg-info">
      <textarea id="mytextarea" rows="20">Hello, World!</textarea>
      <input type="submit" value="New Billet" class="btn btn-light m-2">
    </form>

    <button class="btn btn-info m-2"><a href="?action=getBillets" class="text-light">Disconnect</a></button>


</body>

</html>
