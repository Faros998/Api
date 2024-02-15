<?php
include ('./connection.php');

// Načtení dat uživatelů z JSON souboru
$usersData = file_get_contents('users.json');
$users = json_decode($usersData, true);

try {
    // Zkontrolujte, zda klient poslal správný autentizační token
    // Získání uživatelského identifikátoru a klíče z URL adresy
    $userIdentifier = $_GET['user'];
    $providedKey = $_GET['key'];

     // Ověření existence uživatele v JSON souboru
     if (array_key_exists($userIdentifier, $users)) {
        $storedKey = $users[$userIdentifier];
        // Ověření shody poskytnutého klíče s klíčem v JSON souboru
        if ($providedKey === $storedKey) {
            // Pokud je uživatel ověřen, zpracuje se požadavek

            // Pokud je požadavek typu GET a parametr "action" je "getData"
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getData') {
                // Provedení dotazu na databázi
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $stmt = $pdo->query('SELECT * FROM formular');
                // Získání výsledků jako asociativní pole
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // Vrácení dat jako JSON odpověď
                header('Content-Type: application/json');
                echo json_encode($data);
            }
        } else {
            echo "Poskytnutý klíč neodpovídá.<br>";
        }
    } else {
      
        echo "Na této stránce se nachází API, které není pro vás serverem povoleno.<br><br>";
        echo "https://faros.wz.cz/form3/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData<br>";
    }
} catch (PDOException $e) {
    // Pokud dojde k chybě, zpracování chyby
    echo "Chyba připojení k databázi: " . $e->getMessage();
}
?>
