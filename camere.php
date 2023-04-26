<!DOCTYPE html>
<html>
<head>
	<title>Camere Page</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<?php  
        $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Query per recuperare le prenotazioni
        $sql = "SELECT camere.numero FROM `camere`";
        $sql2 = "SELECT clienti.Codice FROM `clienti`";
        $result2 = mysqli_query($conn, $sql2);
        $result = mysqli_query($conn, $sql);
    ?>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="prenotazioni.php">Prenotazioni</a></li>
				<li><a href="inserimento.php">Account</a></li>
				<li><a href="prenota.php">Prenota</a></li>
                <li><a href="camere.php">Camere</a></li>
			</ul>
		</nav>
	</header>
    <div class="container">
        <div class="column">
                <h1>Nuove camere</h1>
                <form action="insertCamere.php" method="get">
                    <div class="position">
                        <div class = "element2">
                            <div>    
                                <p>
                                    <span class="label">Numero:</span>
                                </p>
                                <p>
                                    <span class="label">Descrizione:</span>
                                </p>
                                <p>
                                    <span class="label">Posti:</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <span><input type="number" name="id"></span>
                                </p>
                                <p>
                                    <span><input type="text" name="descrizione"></span>
                                </p>
                                <p>
                                    <span><input type="number" name="posti"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="invia" class="btn-custom-accept">
                    </div>
                </form>
        </div>
    </div>
    <footer>
	<p>Tutti i diritti riservati &copy; PittiCompany</p>
    </footer>
</body>
</html>
