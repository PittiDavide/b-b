<?php
    $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $codice = $_GET['codice'];
$stmt = $conn->prepare("DELETE s.* FROM soggiorni s INNER JOIN prenotazioni p ON s.Prenotazione = p.id WHERE p.Cliente = ?");
$stmt->bind_param("i", $codice);
$stmt->execute();
$stmt->close();

$stmt = $conn->prepare("DELETE FROM prenotazioni WHERE Cliente = ?");
$stmt->bind_param("i", $codice);
$stmt->execute();
$stmt->close();

$stmt = $conn->prepare("DELETE FROM clienti WHERE codice = ?");
$stmt->bind_param("i", $codice);
$stmt->execute();
$stmt->close();

header("Location: prenotazioni.php");
?>