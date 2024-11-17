<?php
require_once '../app/Models/Article.php';
require_once '../app/Controllers/ArticleController.php';

// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=airpur', 'root', 'root');
$model = new Pilote($db);

// Récupération de l'action (par exemple, 'index' ou 'show')
$action = isset($_GET['action']) ? $_GET['action'] : 'accueil';

$controller = new PiloteController($model);

// Exécution de l'action appropriée
if ($action == 'accueil') {
    $controller->choix();
} 

elseif ($action == 'pilote') {
    $controller->pilote();
}
elseif ($action == 'show_pilote') {
    $nom = isset($_GET['nom']) ? $_GET['nom'] : null;
    if ($nom) {
        $controller->show_pilote($nom);
    }
}
elseif ($action == 'compa') {
    $controller->compa();
}
elseif ($action == 'show_compa') {
    $compa = isset($_GET['compa']) ? $_GET['compa'] : null;
    if ($compa) {
        $controller->show_compa($compa);
    }
}
?>