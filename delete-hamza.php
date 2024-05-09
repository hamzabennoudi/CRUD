<?php

include 'database-hamza.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM te_laat_meldingen WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "Error in preparing the SQL statement: " . $conn->error;
    } else {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: read-hamza.php");
            exit;
        } else {
            echo "Fout bij het verwijderen van de gegevens: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>