<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <i>Пример URL log.com/?Переменная1=значение1&Переменная2=значение2</i>
  <br>
  <br>
  <?php

  echo 'Переменная1 = ' . ($_GET["Переменная1"]) . '<br>';
  echo 'Переменная2 = ' . ($_GET["Переменная2"]);

  ?>
</body>

</html>
