<!DOCTYPE html>
<html>
<head>
	<title>B&B prenotazioni</title>
	<link rel="stylesheet" type="text/css" href="prenotazioni.css">
</head>
<body>
    <?php  
        $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Query per recuperare le prenotazioni
        $sql = "SELECT * FROM Prenotazioni";

        $result = mysqli_query($conn, $sql);
    ?>
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
    <section  class="container">
    <h2>Elenco prenotazioni</h2>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Camera</th>
                <th>Data arrivo</th>
                <th>Data partenza</th>
                <th>Disdetta</th>
                <th>elimina</th>
            </tr>
        </thead>
        <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <form action="user.php" method="get">
            <td><input type="submit" name="submit" value="<?php echo $row['Cliente']; ?>" class="btn"></td>
            <input type="hidden" name = "cliente" value = "<?php echo $row['Cliente']; ?>" class="btn"></iput>
        </form>
        <td><?php echo $row['Camera']; ?></td>
        <td><?php echo $row['DataArrivo']; ?></td>
        <td><?php echo $row['DataPartenza']; ?></td>
        <td><?php echo $row['Disdetta']; ?></td>
        <form action="delete.php" method="get">
            <td><input type="submit" name="submit" value="elimina" class="btn"></td>
            <input type="hidden" name = "id" value = "<?php echo $row['id']; ?>"></iput>
        </form>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</section>
<footer>
	<p>Tutti i diritti riservati &copy; PittiCompany</p>
</footer>
</body> 
</html>