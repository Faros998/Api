<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>InfoAPI</title>
</head>
<body>
    <h2>API s evidencí osob</h2>
<p>Na serveru faros.wz.cz běží evidence osob a poskytuje čtyři varianty API. Odkaz na 
<i><a href="https://github.com/Faros998/Api">GitHub</a></i></p><br>


<div class="one">
<h4>První varianta je API bez zabezpečení</h4>
Zde je odkaz na API ze serveru
<i><a href="https://faros.wz.cz/form1/dataserver.php?action=getData">https://faros.wz.cz/form1/dataserver.php?action=getData</a></i><br>
Příklad zobrazených hodnot v klientském PC
<i><a href="https://faros.wz.cz/form1/index.php">https://faros.wz.cz/form1/index.php</a></i><br><br><br>
    </div>

    <div class="two">
    <h4>Druhá varianta je API s tokenem, který je poslán metodou GET v odkaze. Tajné heslo tokenu je:3cxb4</h4>

Zde je odkaz na API ze serveru
<i><a href="https://faros.wz.cz/form2/dataserver.php?action=getData&token=3cxb4">https://faros.wz.cz/form2/dataserver.php?action=getData&token=3cxb4</a></i><br>
Příklad zobrazených hodnot v klientském PC
<i><a href="https://faros.wz.cz/form2/index.php">https://faros.wz.cz/form2/index.php</a></i><br><br><br>
    </div>

    <div class="three">
    <h4>Třetí varianta je API s ověřením uživatele a hesla z Json souboru na serveru</h4>

    Zde je odkaz na API ze serveru
<i><a href="https://faros.wz.cz/form3/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData">https://faros.wz.cz/form3/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData</a></i><br>
Příklad zobrazených hodnot v klientském PC až po zadání jména a hesla.
<br><br>
Zaregistrované účty na serveru v Json souboru:
<br><br>
Jméno: u1   Heslo: abc
<br>
Jméno: u2   Heslo: def
<br>
Jméno: u3   Heslo: ghi
<br><br>


<form action="https://faros.wz.cz/form3/index.php" method="post">
        <label for="jmeno">Jméno:</label><br>
        <input type="text" id="jmeno" name="jmeno"><br>
        <label for="email">Heslo:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Odeslat ověření pro získání API ze serveru do klienta https://faros.wz.cz/form3/index.php">
    </form>


<i><a href="https://faros.wz.cz/form3/index.php">https://faros.wz.cz/form3/index.php</a></i><br><br>
    </div>

    <div class="four">
    <h4>Čtvrtá varianta je API s ověřením uživatele, hesla a rozlišením jeho práv, jaké data může vidět. Opět z Json souboru na serveru</h4>

Zde je odkaz na API ze serveru
<i><a href="https://faros.wz.cz/form4/dataserver.php?user=$userIdentifier&key=$providedKey&group=$userGroup&action=getData">https://faros.wz.cz/form4/dataserver.php?user=$userIdentifier&key=$providedKey&group=$userGroup&action=getData</a></i><br>
Zobrazí hodnoty až po zadání jména a hesla v klientském PC.<br>
Server podle udělených práv rozliší, jaký výpis dat se uživateli může zobrazit.<br><br>

Zaregistrované účty a práva na serveru v Json souboru:<br><br>
Skupina <b>ADMIN</b> vidí všechny záznamy. <br>
Jméno: u1 Heslo: abc<br>
Jméno: u11 Heslo: abcc<br><br>
Skupina <b>USER</b> vidí jméno, příjmení a email. <br>
Jméno: u2 Heslo: def<br>
Jméno: u22 Heslo: deff<br><br>
Skupina <b>HOST</b> vidí jen jméno a příjmení<br>
Jméno: u3 Heslo: ghi<br>
Jméno: u33 Heslo: ghii<br><br>


<form action="https://faros.wz.cz/form4/index.php" method="post">
    <label for="jmeno">Jméno:</label><br>
    <input type="text" id="jmeno" name="jmeno"><br>
    <label for="email">Heslo:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Odeslat ověření pro získání API ze serveru do klienta https://faros.wz.cz/form4/index.php">
</form>


<i><a href="https://faros.wz.cz/form4/index.php">https://faros.wz.cz/form4/index.php</a></i>


    
</body>
</html>