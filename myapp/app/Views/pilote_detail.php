<?php
echo '<h1>Nom du pilote : ' . $article['nom'] . '</h1>';
echo '<p>Pseudonyme : ' . $article['pseudo'] . '</p>';
echo '<p>Brevet : ' . strtoupper($article['brevet']) . '</p>';
echo '<p>Compagnie : ' . $article['compa'] . '</p>';
echo '<p>Nombre d\'heure de Vol : ' . intval($article['nbHVol']) . '</p>';
echo '<a href="index.php?action=pilote">Retour à la liste des pilotes</a><br>';
?>