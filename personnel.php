<?php
require_once 'functions.php';
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personnel</title>
  <style>
    html {
      /* color-scheme: dark; */
    }
  </style>
</head>

<body>
  <h2>Liste du personnel</h2>

  <ul>
    <?php
    foreach ($personnel as $value) :
      if ($value['service'] != 'Vente') :
        echo "<li><strong>${value['nom']}</strong> ${value['prenom']} (${value['service']})</li>";
      endif;
    endforeach;
    ?>
  </ul>

  <?php myPrint_r($personnel); ?>
</body>

</html>