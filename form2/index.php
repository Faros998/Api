<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoAPI</title>
</head>
<body>

<?php

// URL adresa vašeho PHP skriptu
$url = "https://faros.wz.cz/form2/dataserver.php?action=getData&token=3cxb4";

try {
    // Inicializace CURL
    $ch = curl_init();

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

    // Výpis odpovědi
    echo "Odpověď od serveru: " . $response;

    // Uzavření CURL spojení
    curl_close($ch);
} catch (Exception $e) {
    // Zpracování chyby
    echo "Chyba: " . $e->getMessage();
}
?>
</body>
</html>