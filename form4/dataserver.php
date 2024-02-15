<?php
include ('./connection.php');

// Načtení dat uživatelů z JSON souboru
$usersData = file_get_contents('users.json');
$users = json_decode($usersData, true);

try {
    // Získání uživatelského identifikátoru a klíče z URL adresy
    $userIdentifier = $_GET['user'];
    $providedKey = $_GET['key'];

    // Ověření existence uživatele v JSON souboru
    if (array_key_exists($userIdentifier, $users)) {
        $storedKey = $users[$userIdentifier]['password'];
        $userGroup = $users[$userIdentifier]['group']; // Získání skupiny uživatele

        // Ověření shody poskytnutého klíče s klíčem v JSON souboru
        if ($providedKey === $storedKey) {
            // Pokud je uživatel ověřen, provádí se SQL dotaz podle skupiny
            if ($userGroup === 'admin') {
                // Pokud je uživatel admin, získávají se všechny sloupce
                $sql = 'SELECT * FROM formular';
            } elseif ($userGroup === 'user') {
                // Pokud je uživatel user, získává sloupce jmeno,prijmeni,email
                $sql = 'SELECT jmeno,prijmeni,email FROM formular';
            } else {
                // Pokud uživatel není v žádné speciální skupině, získává se pouze sloupec jmeno,příjmení
                $sql = 'SELECT jmeno,prijmeni FROM formular';
            }

            // Připojení k databázi a provedení SQL dotazu
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $stmt = $pdo->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Vrácení dat jako JSON odpověď
            header('Content-Type: application/json');
         
            echo "uživatel <b>$userIdentifier</b> s heslem   <b>$providedKey</b> a právem <b>$userGroup</b>";
               if ($userGroup === "admin"){
                echo " vidi všechny data<br><br>";
            }
                 if ($userGroup === "user"){
                echo " vidi jen jméno, příjmení a email<br><br>";
            }
                    if ($userGroup === "host"){
                echo " vidi jen jméno a příjmení<br><br>";
            }
            
            echo json_encode($data);;
        } else {
            echo "Poskytnutý klíč neodpovídá.";
        }
    } else {
        echo "Uživatel neexistuje.";
    }
} catch (PDOException $e) {
    // Pokud dojde k chybě, zpracování chyby
    echo "Chyba připojení k databázi: " . $e->getMessage();
}
?>