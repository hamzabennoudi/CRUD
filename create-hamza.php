<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe Te Laat Melding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Nieuwe Te Laat Melding</h1>
    <form action="insert.php" method="POST" onsubmit="return validateForm()">
        <label for="naam">Naam van de student:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="klas">Klas:</label>
        <input type="text" id="klas" name="klas" required><br>

        <label for="minuten_te_laat">Aantal minuten te laat:</label>
        <input type="number" id="minuten_te_laat" name="minuten_te_laat" required><br>

        <label for="reden">Reden van het te laat komen:</label>
        <textarea id="reden" name="reden" rows="4" required></textarea><br>

        <input type="submit" value="Invoegen">
    </form>

    <script>
        function validateForm() {
            var minuten_te_laat = document.getElementById("minuten_te_laat").value;
            if (minuten_te_laat < 0) {
                alert("Aantal minuten te laat moet positief zijn.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>