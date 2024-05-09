<?php

include 'database-hamza.php';

$sql = "SELECT * FROM te_laat_meldingen";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Laat Meldingen - Overzicht</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Te Laat Meldingen - Overzicht</h1>
    <a href="create-hamza.php">Weer eentje te laat</a> 

    <table>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Klas</th>
            <th>Minuten te laat</th>
            <th>Reden</th>
            <th>Acties</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["naam"] . "</td>";
                echo "<td>" . $row["klas"] . "</td>";
                echo "<td>" . $row["minuten_te_laat"] . "</td>";
                echo "<td>" . $row["reden"] . "</td>";
                echo "<td>";
                echo "<a href='update-hamza.php?id=" . $row["id"] . "'>Update</a> ";
                echo "<a href='delete-hamza.php?id=" . $row["id"] . "' onclick='return confirm(\"Weet je zeker dat je dit wilt verwijderen?\")'>Verwijder</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Geen te laat meldingen gevonden.</td></tr>";
        }
        ?>

    </table>
</body>
</html>

<?php
$conn->close();
?>