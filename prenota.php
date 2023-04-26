<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
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
                <h1>Nuove prenotazioni</h1>
                <form action="insertPrenotazioni.php" method="get">
                    <div class="position">
                        <p>
                            <span class="label">Identificativo:</span>
                            <span><input type="text" name="id"></span>
                        </p>
                        <div class="element">
                            <div class="element">
                                <span class="label">Cliente:</span>
                                <div class= "client">
                                    <?php while ($row = mysqli_fetch_assoc($result2)) : ?>
                                    <input type="radio" name="cliente" value="<?php echo $row['Codice']; ?>">
                                    <label for="html"><?php echo $row['Codice']; ?></label><br>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="element">
                                <span class="label">Camera:</span>
                                <div class="client">
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                    <input type="radio" name="camera" value="<?php echo $row['numero']; ?>">
                                    <label for="html"><?php echo $row['numero']; ?></label><br>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <div class = "element2">
                            <div>
                                <p>
                                    <span class="label">Data di arrivo:</span>
                                </p>
                                <p>
                                    <span class="label">Data di partenza:</span>
                                </p>
                                <p>
                                    <span class="label">Disdetta:</span>
                                </p>
                                <p>
                                    <span class="label">Documento:</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <span><input type="date" name="DataArrivo"></span>
                                </p>
                                <p>
                                    <span><input type="date " name="DataPartenza"></span>
                                </p>
                                <p>
                                    <span><input type="text" name="disdetta"></span>
                                </p>
                                <p>
                                    <span><input type="text" name="documento"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="invia" class="btn-custom-accept">
                    </div>
                </form>
        </div>
    <footer>
	<p>Tutti i diritti riservati &copy; PittiCompany</p>
    </footer>
</body>
</html>
