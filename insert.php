<?php 
    $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $codice = $_GET['codice'];
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $indirizzo = $_GET['indirizzo'];
    $telefono = $_GET['telefono'];
    $email = $_GET['email'];
    $quary = "INSERT INTO clienti (Codice, Cognome, Nome, Indirizzo, Telefono, Email) VALUES ('$codice', '$cognome', '$nome', '$indirizzo', '$telefono', '$email')";

    $result = mysqli_query($conn, $quary);
    header("Location: index.php");
?>