<?php
require_once 'config.php';

$req = "SELECT * FROM `news`";
$res = $connect->query($req);
echo $connect->error;

$news = $res->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les news</title>
    <style>
        html {
            color-scheme: dark;
        }

        details {
            padding: 1rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Les news</h1>

    <!-- <?php
    foreach ($news as $key => $new) :
        echo "
        <details data-key=\"${key}\">
            <summary>#${key} - ${new['titre']}</summary>
            ${new['contenu']}
        </details>
        ";
    endforeach;
    ?> -->
    <ul>
        <?php
        foreach ($news as $key => $new) :
            echo "<li><a href=\"details_news.php?id_news=${new['id']}\">${new['titre']}</a></li>";
        endforeach;
        ?>
    </ul>
</body>

</html>