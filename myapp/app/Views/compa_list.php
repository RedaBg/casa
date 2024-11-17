<?php
echo '<h1>Liste des compagnies</h1>';
foreach ($comp as $compa) {
    echo '<a href="index.php?action=show_compa&compa=' . $compa['nomcomp'] . '">'. $compa['nomcomp'] . '</a><br>';
}
echo '<br><a href="index.php?action=accueil">Retour à l\'acceuil</a><br>';
?>