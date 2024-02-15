<?php
// Uživatelský identifikátor, klíč a skupina
$userIdentifier = "u1";
$providedKey = "abc";


try {
    // Inicializace CURL
    $ch = curl_init();

    // URL adresa serverového skriptu s přidanými query parametry
    $url = "https://faros.wz.cz/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData";

    // Nastavení URL adresy, kam se má poslat požadavek
    curl_setopt($ch, CURLOPT_URL, $url);

    // Nastavení, aby se výsledek vrátil jako řetězec
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Vykonání CURL požadavku a uložení odpovědi
    $response = curl_exec($ch);
    var_dump($response);

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
