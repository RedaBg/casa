<?php
class PiloteController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function choix() {
        include 'C:/Projet/Apache24/htdocs/myapp/app/Views/choix.php';
    }

    public function pilote() {
        $articles = $this->model->getAllArticles();
        include 'C:/Projet/Apache24/htdocs/myapp/app/Views/pilote_list.php';
    }

    public function show_pilote($nom) {
        $article = $this->model->getArticleById($nom);
        include 'C:/Projet/Apache24/htdocs/myapp/app/Views/pilote_detail.php';
    }

    public function compa() {
        $comp = $this->model->getAllCompa();
        include 'C:/Projet/Apache24/htdocs/myapp/app/Views/compa_list.php';
    }
    public function show_compa($compa) {
        $compa = $this->model->getCompaByNom($compa);
        include 'C:/Projet/Apache24/htdocs/myapp/app/Views/compa_details.php';
    }
}
?>