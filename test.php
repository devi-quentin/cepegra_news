<?php

$panier = [];
$panier = ["bananes", "fraises"];
$panier[] = "pommes";
$panier[] = "poires";

// Affichage technique
echo '<pre>';
print_r($panier);
echo '</pre>';

echo "<ul>";
foreach ($panier as $key => $fruit) {
    echo "<li data-key=\"$key\">$key: $fruit</li>";
}
echo "</ul>";

?>