<?php 
    $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_GET['id'];
    $descrizione = $_GET['descrizione'];
    $posti = $_GET['posti'];
    $quary = "INSERT INTO `camere`(`Numero`, `Descrizione`, `Posti`) VALUES ('$id','$descrizione','$posti')";
    $result = mysqli_query($conn, $quary);
    header("Location: index.php");
?>