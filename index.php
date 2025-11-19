<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script src="/assets/js/main.js" defer></script>
  <title>Document</title>
</head>
<body>

<main class="main cont">
  <form action="actions/upload.php" method="POST" enctype="multipart/form-data">
    <button id="btn" style="width: 100%;" class="btn btn--admin" type="button">Загрузить</button>
    <input type="file" name="file" id="fileInput" style="display: none;">
    <br><br><br>
    <button id="submitBtn" style="width: 100%; display: none;" class="btn btn--admin" type="submit">Подтвердить загрузку файла "<span id="fileName"></span>"</button>
  </form>
</main>
  
</body>
</html>