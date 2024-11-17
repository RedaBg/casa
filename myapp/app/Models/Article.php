<?php
class Pilote {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllArticles() {
        $query = "SELECT * FROM pilote";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($nom) {
        $query = "SELECT * FROM pilote WHERE nom = :nom";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllCompa() {
        $query = "SELECT * FROM compagnie";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCompaByNom($compa) {
        $query = "SELECT * FROM compagnie WHERE nomcomp = :compa";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':compa', $compa, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>