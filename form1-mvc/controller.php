<?php
header('Content-Type: application/json; charset=utf-8');

require_once './model.php';

// Nastavení údajů pro připojení k databázi
$host = 'sql4.webzdarma.cz'; // Název hostitele databáze
$dbname = 'faroswzcz6369'; // Název databáze
$username = 'faroswzcz6369'; // Uživatelské jméno databáze
$password = 'Passw1rd+'; // Heslo k databázi

// Vytvoření instance modelu
$model = new DatabaseModel($host, $dbname, $username, $password);

// Pokud je požadavek typu GET a parametr "action" je "getData"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getData') {
    // Získání dat z modelu
    $data = $model->getData();
    // Vrácení dat jako JSON odpověď
    echo json_encode($data);
}
?>
