API s evidencí osob

Na serveru faros.wz.cz běží evidence osob a poskytuje čtyři varianty API. Odkaz na GitHub

Zaslat zprávu
První varianta je API bez zabezpečení

Zde je odkaz na API ze serveru https://faros.wz.cz/form1/dataserver.php?action=getData
Příklad zobrazených hodnot v klientském PC https://faros.wz.cz/form1/index.php


API - MVC bez zabezpečení

Zde je odkaz na API ze serveru http://faros.wz.cz/form1-mvc/controller.php?action=getData
Příklad zobrazených hodnot v klientském PC https://faros.wz.cz/form1-mvc/index.php


Druhá varianta je API s tokenem, který je poslán metodou GET v odkaze. Tajné heslo tokenu je:3cxb4

Zde je odkaz na API ze serveru https://faros.wz.cz/form2/dataserver.php?action=getData&token=3cxb4
Příklad zobrazených hodnot v klientském PC https://faros.wz.cz/form2/index.php


Třetí varianta je API s ověřením uživatele a hesla z Json souboru na serveru

Zde je odkaz na API ze serveru https://faros.wz.cz/form3/dataserver.php?user=$userIdentifier&key=$providedKey&action=getData
Příklad zobrazených hodnot v klientském PC až po zadání jména a hesla.

Zaregistrované účty na serveru v Json souboru:

Jméno: u1 Heslo: abc
Jméno: u2 Heslo: def
Jméno: u3 Heslo: ghi

Jméno:

Heslo:



https://faros.wz.cz/form3/index.php

Čtvrtá varianta je API s ověřením uživatele, hesla a rozlišením jeho práv, jaké data může vidět. Opět z Json souboru na serveru

Zde je odkaz na API ze serveru https://faros.wz.cz/form4/dataserver.php?user=$userIdentifier&key=$providedKey&group=$userGroup&action=getData
Zobrazí hodnoty až po zadání jména a hesla v klientském PC.
Server podle udělených práv rozliší, jaký výpis dat se uživateli může zobrazit.

Zaregistrované účty a práva na serveru v Json souboru:

Skupina ADMIN vidí všechny záznamy.
Jméno: u1 Heslo: abc
Jméno: u11 Heslo: abcc

Skupina USER vidí jméno, příjmení a email.
Jméno: u2 Heslo: def
Jméno: u22 Heslo: deff

Skupina HOST vidí jen jméno a příjmení
Jméno: u3 Heslo: ghi
Jméno: u33 Heslo: ghii

Jméno:

Heslo:



https://faros.wz.cz/form4/index.php
