<!DOCTYPE html>
<html>
<head>
	<title>inserimento utenti</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
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
                <form action="insert.php" method="get">
                    <div class="position">
                        <p>
                            <span class="label">Codice:</span>
                            <span><input type="text" name="codice"></span>
                        </p>
                        <p>
                            <span class="label">Cognome:</span>
                            <span><input type="text" name="cognome"></span>
                        </p>
                        <p>
                            <span class="label">Nome:</span>
                            <span><input type="text" name="nome"></span>
                        </p>
                        <p>
                            <span class="label">Indirizzo:</span>
                            <span><input type="text" name="indirizzo"></span>
                        </p>
                        <p>
                            <span class="label">Telefono:</span>
                            <span><input type="text" name="telefono"></span>
                        </p>
                        <p>
                            <span class="label">Email:</span>
                            <span><input type="text" name="email"></span>
                        </p>
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
