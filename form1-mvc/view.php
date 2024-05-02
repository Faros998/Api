
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data z databáze</title>
</head>
<body>
   
    <div id="data"></div>
    
    <script>
        // Získání dat pomocí AJAX požadavku
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Zobrazení dat ve stránce
                document.getElementById("data").innerHTML = this.responseText;
            }
        };
        xhr.open("GET", "controller.php?action=getData", true);
        xhr.send();
    </script>
</body>
</html>
