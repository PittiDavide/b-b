<?php 
    $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_GET['id'];
    $cliente = $_GET['cliente'];
    $camera = $_GET['camera'];
    $DataArrivo = $_GET['DataArrivo'];
    $DataPartenza = $_GET['DataPartenza'];
    $disdetta = $_GET['disdetta'];
    $documento = $_GET['documento'];
    $quary = "INSERT INTO `prenotazioni`(`id`, `Cliente`, `Camera`, `DataArrivo`, `DataPartenza`, `Disdetta`) VALUES ('$id', '$cliente', '$camera', '$DataArrivo', '$DataPartenza', '$disdetta')";

    $result = mysqli_query($conn, $quary);
    $quary = "INSERT INTO `soggiorni`(`Prenotazione`, `Cliente`, `Documento`) VALUES ('$id', '$cliente' ,'$documento')";
    $result = mysqli_query($conn, $quary);
    header("Location: index.php");
?>