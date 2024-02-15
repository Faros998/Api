<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form4</title>
</head>
<body>
<?php
// Uživatelský identifikátor a klíč


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání hodnoty jména z pole $_POST
    $jmeno = $_POST['jmeno'];
    
    // Získání hodnoty emailu z pole $_POST
    $password = $_POST['password'];

   
} else {
    // Pokud nebyla odeslána metoda POST, zobrazte chybu
    echo "Chyba: Data nebyla odeslána";
}



$userIdentifier =  $jmeno;
$providedKey = $password;


try {
    // Inicializace CURL
    $ch = curl_init();

    // URL adresa serverového skriptu s přidanými query parametry
    $url = "https://faros.wz.cz/form4/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData";

    // Nastavení URL adresy, kam se má poslat požadavek
    curl_setopt($ch, CURLOPT_URL, $url);

    // Nastavení, aby se výsledek vrátil jako řetězec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Vykonání CURL požadavku a uložení odpovědi
    $response = curl_exec($ch);

    // Zpracování odpovědi
    if ($response === false) {
        throw new Exception("Chyba při získávání odpovědi z serveru");
    }

    // Dekódování JSON odpovědi na asociativní pole
    $data = json_decode($response, true);
    // Výpis odpovědi
    echo $response;

    // Uzavření CURL spojení
    curl_close($ch);
} catch (Exception $e) {
    // Zpracování chyby
    echo "Chyba: " . $e->getMessage();
}
?>