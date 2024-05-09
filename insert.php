<?php

include 'database-hamza.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $klas = $_POST["klas"];
    $minuten_te_laat = $_POST["minuten_te_laat"];
    $reden = $_POST["reden"];

    if ($minuten_te_laat < 0) {
        die("Aantal minuten te laat moet positief zijn.");
    }

    $sql = "INSERT INTO te_laat_meldingen (naam, klas, minuten_te_laat, reden) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "Error in preparing the SQL statement: " . $conn->error;
    } else {
        $stmt->bind_param("ssis", $naam, $klas, $minuten_te_laat, $reden);

        if ($stmt->execute()) {
            header("Location: read-hamza.php");
            exit;
        } else {
            echo "Fout bij het invoegen van de gegevens: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>