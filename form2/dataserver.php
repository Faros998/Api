<?php
include ('connection.php');

// Definice autentizačního tokenu
$authToken = "3cxb4";

try {
    // Zkontrolujte, zda klient poslal správný autentizační token
    if (!isset($_GET['token']) || $_GET['token'] !== $authToken) {
        // Pokud autentizační token není správný, vrátíme chybu
        die("Neplatný autentizační token");
    }

    // Vytvoření instance PDO pro připojení k databázi
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Nastavení režimu chybového hlášení na výjimky
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Pokud je požadavek typu GET a parametr "action" je "getData"
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getData') {
        // Provedení dotazu na databázi
        $stmt = $pdo->query('SELECT * FROM formular');
        // Získání výsledků jako asociativní pole
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Vrácení dat jako JSON odpověď
        header('Content-Type: application/json');
        echo json_encode($data);
    }
} catch (PDOException $e) {
    // Pokud dojde k chybě, zpracování chyby
    echo "Chyba připojení k databázi: " . $e->getMessage();
}
?>
