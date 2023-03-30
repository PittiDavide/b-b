<!DOCTYPE html>
<html>
<head>
	<title>B&B Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php  
        $conn = mysqli_connect("localhost","root","","db_bed_and_breakfast");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Query per recuperare le prenotazioni
        $sql = "SELECT * FROM camere";

        $result = mysqli_query($conn, $sql);
    ?>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="prenotazioni.php">Prenotazioni</a></li>
				<li><a href="#">Modifica</a></li>
				<li><a href="#">Prenota</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="hero">
			<h1>Benvenuti al nostro B&B</h1>
			<p>Un luogo accogliente dove trascorrere le vostre vacanze.</p>
			<a href="https://youtu.be/GDOccr-qyVc">Scopri di più</a>
		</section>
		<section class="features">
			<div class="feature">
				<img src="https://www.bellavitainpuglia.it/Content/images/partner/4141/1920x0/ca3f5d8626582c6048a09181061c4614.jpg" alt="Spa">
				<h2>Spa inclusa</h2>
				<p>Il miglior modo per rilassarvi e godervi la vostre giornate di riposo.</p>
			</div>
			<div class="feature">
				<img src="https://www.bedandbreakfastlatosca.com/images/sala-colazione-beb-la-tosca-marina-di-massa_page.jpg" alt="Colazione">
				<h2>Colazione inclusa</h2>
				<p>Una ricca colazione vi aspetta ogni mattina.</p>
			</div>
			<div class="feature">
				<img src="https://www.bedandbreakfastsangiovanniinmarignano.com/wp-content/uploads/2020/04/il-parcheggio-del-bb-il-Casale.jpg" alt="Parcheggio">
				<h2>Parcheggio gratuito</h2>
				<p>Parcheggio gratuito disponibile per tutti i nostri ospiti.</p>
			</div>
		</section>
		<section class="gallery">
            <h2>La nostre camere</h2>
            <?php if (mysqli_num_rows($result) > 0) : ?>
            <div class="slider">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="slide">
                    <h3><?php echo $row['Numero']; ?></h3>
                    <p><?php echo $row['Descrizione']; ?></p>
                    <p><?php echo $row['Posti']; ?> posti letto</p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
		</section>
	</main>
	<footer>
		<p>Tutti i diritti riservati &copy; PittiCompany</p>
	</footer>
</body>
</html>
<!-- Collegamento ai file necessari -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Inizializzazione del plugin Slick -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
      dots: true, // mostra i pallini per la navigazione
      arrows: true, // mostra le frecce per la navigazione
      infinite: true, // abilita la ripetizione continua dello slider
      speed: 300, // velocità di transizione tra le immagini
      slidesToShow: 3, // numero di immagini visualizzate contemporaneamente
      slidesToScroll: 3, // numero di immagini da scorrere alla volta
      responsive: [ // definizione dei breakpoint per la versione mobile
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true,
            arrows: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true
          }
        }
      ]
    });
  });
</script>
