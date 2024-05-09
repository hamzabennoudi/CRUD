<?php

include 'database-hamza.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $naam = $_POST["naam"];
    $klas = $_POST["klas"];
    $minuten_te_laat = $_POST["minuten_te_laat"];
    $reden = $_POST["reden"];

    $sql = "UPDATE te_laat_meldingen SET naam='$naam', klas='$klas', minuten_te_laat='$minuten_te_laat', reden='$reden' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: read-hamza.php");
        exit;
    } else {
        echo "Fout bij het bijwerken van de gegevens: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM te_laat_meldingen WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $naam = $row["naam"];
        $klas = $row["klas"];
        $minuten_te_laat = $row["minuten_te_laat"];
        $reden = $row["reden"];
    } else {
        echo "Te laat melding niet gevonden.";
        exit;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Te Laat Meldingen - Bijwerken</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Te Laat Meldingen - Bijwerken</h1>
    <a href="database-hamza.php">Terug naar overzicht</a>

    <form method="POST" action="update-hamza.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="naam">Naam:</label>
        <input type="text" name="naam" value="<?php echo $naam; ?>" required><br><br>

        <label for="klas">Klas:</label>
        <input type="text" name="klas" value="<?php echo $klas; ?>" required><br><br>

        <label for="minuten_te_laat">Minuten te laat:</label>
        <input type="number" name="minuten_te_laat" value="<?php echo $minuten_te_laat; ?>" required><br><br>

        <label for="reden">Reden:</label>
        <input type="text" name="reden" value="<?php echo $reden; ?>"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>