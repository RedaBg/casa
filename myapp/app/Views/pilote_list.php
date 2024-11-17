<?php
echo '<h1>Liste des pilotes</h1>';
foreach ($articles as $article) {
    echo '<a href="index.php?action=show_pilote&nom=' . $article['nom'] . '">'. $article['nom'] . '</a><br>';
}
echo '<br><a href="index.php?action=accueil">Retour à l\'acceuil</a><br>';
?>