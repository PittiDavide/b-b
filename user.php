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
        $codice = $_GET['cliente'];
        $sql = "SELECT prenotazioni.Camera, prenotazioni.DataArrivo, prenotazioni.DataPartenza, prenotazioni.Disdetta, clienti.Cognome,clienti.Nome,clienti.Telefono,clienti.Email, clienti.Indirizzo, clienti.Codice FROM `Prenotazioni` INNER join `clienti` on prenotazioni.Cliente = clienti.Codice WHERE clienti.Codice = $codice";

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) :
?>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="prenotazioni.php">Prenotazioni</a></li>
				<li><a href="inserimento.php">Account</a></li>
				<li><a href="#">Prenota</a></li>
			</ul>
		</nav>
	</header>
    <div class="container">
        <div class="column">
                <h1>Dati utente</h1>
                <form action="deleteUser.php" method="get">
                    <input type="hidden" name = "codice" value = "<?php echo $row['Codice']; ?>"></iput>
                    <div class="position">
                        <p>
                            <span class="label">Codice:</span>
                            <span><?php echo $row['Codice']; ?></span>
                        </p>
                        <p>
                            <span class="label">Cognome:</span>
                            <span><?php echo $row['Cognome']; ?></span>
                        </p>
                        <p>
                            <span class="label">Nome:</span>
                            <span><?php echo $row['Nome']; ?></span>
                        </p>
                        <p>
                            <span class="label">Indirizzo:</span>
                            <span><?php echo $row['Indirizzo']; ?></span>
                        </p>
                        <p>
                            <span class="label">Telefono:</span>
                            <span><?php echo $row['Telefono']; ?></span>
                        </p>
                        <p>
                            <span class="label">Email:</span>
                            <span><?php echo $row['Email']; ?></span>
                        </p>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="elimina" class="btn-custom">
                    </div>
                </form>
        </div>
    </div>
    <h1>Prenotazioni personali</h1>
    <table>
        <thead>
            <tr>
                <th>Camera</th>
                <th>Data arrivo</th>
                <th>Data partenza</th>
                <th>Disdetta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['Camera']; ?></td>
                <td><?php echo $row['DataArrivo']; ?></td>
                <td><?php echo $row['DataPartenza']; ?></td>
                <td><?php echo $row['Disdetta']; ?></td>
            </tr>
        </tbody>
    </table>
    <?php endwhile; ?>
    <footer>
	<p>Tutti i diritti riservati &copy; PittiCompany</p>
    </footer>
</body>
</html>
