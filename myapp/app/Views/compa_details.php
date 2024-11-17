<?php
echo '<h1>Nom de la compagnie : ' . $compa['nomcomp'] . '</h1>';
echo '<p>Diminutif : ' . $compa['comp'] . '</p>';
echo '<p>Numéro de rue : ' . $compa['nrue'] . '</p>';
echo '<p>Rue : ' . $compa['rue'] . '</p>';
if ($compa['ville'] == null)  {
    $compa['ville'] = "Ville inconnue";
}
echo '<p>Ville : ' . $compa['ville'] . '</p>';
echo '<a href="index.php?action=compa">Retour à la liste des compagnies</a><br>';
?>