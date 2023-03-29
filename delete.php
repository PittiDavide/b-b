<?php
    $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_GET['id'];
    $quary = "DELETE FROM soggiorni WHERE Prenotazione = $id";
    $result = mysqli_query($conn, $quary);
    $quary = "DELETE FROM prenotazioni WHERE id = $id";
    $result = mysqli_query($conn, $quary);
    header("Location: prenotazioni.php");
?>