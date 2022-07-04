<?php
require_once 'config.php';

$id_news = $_GET['id_news'];

$req = "SELECT * FROM `news` WHERE `id` = $id_news";
$res = $connect->query($req);
echo $connect->error;

$news = $res->fetch_all(MYSQLI_ASSOC);
$num_rows = $res->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($num_rows > 0) ? $news[0]['titre'] : "Aucun contenu"; ?></title>
    <style>
        html {
            color-scheme: dark;
        }
    </style>
</head>

<body>
    <a href="index.php">Retour</a>
    <?php if ($num_rows > 0) : ?>
        <header>
            <h1><?php echo $news[0]['titre']; ?></h1>
        </header>
        <main>
            <p><?php echo $news[0]['contenu']; ?></p>
        </main>
    <?php else : ?>
        <p>Aucun contenu trouvé</p>
    <?php endif; ?>
</body>

</html>