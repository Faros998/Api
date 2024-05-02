<?php

class DatabaseModel {
    private $pdo;

    public function __construct($host, $dbname, $username, $password) {
        // Vytvoření instance PDO pro připojení k databázi
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Nastavení režimu chybového hlášení na výjimky
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Nastavení kódování pro komunikaci s databází
        $this->pdo->exec("set names utf8");
    }

    public function getData() {
        // Provedení dotazu na databázi
        $stmt = $this->pdo->query('SELECT * FROM formular');
        // Získání výsledků jako asociativní pole
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

?>
