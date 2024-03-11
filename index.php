<?php
// Mandamos llamar nuestra BD
include 'dbConfig.php';
?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Sneakersun SA de CV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Enlace a la hoja de estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Enlace a la hoja de estilos personalizada -->
	<link rel="stylesheet" href="estilos.css">
</head>
<style>
	.card {
		flex: 0 0 calc(33.33% - 6px);
		/* 3 products in each row */
	}

	body {
		font-family: Arial, sans-serif;
		background-color: #f9f9f9;
		margin: 0;
		padding: 0;
	}

	.container {
		max-width: auto;
		margin: 20px auto;
		padding: 20px;
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
	}

	h1 {
		color: #333;
	}

	h4 {
		color: black;
	}

	h5 {
		color: black;
	}

	p {
		color: #666;
	}

	.values-list {
		list-style: none;
		padding: 0;
	}

	.values-list li {
		margin-bottom: 10px;
	}

	.half-br {
		display: block;
		content: "";
		height: 0.5em;
		/* Ajusta la altura a la mitad de una línea */
	}

	.objectives-list {
		list-style: decimal;
		padding-left: 20px;
	}
</style>

<head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php">
				<img src="img\sneackersun-logo.jpeg" alt="Sneakersun Logo" width="50" height="50">
				Sneakersun SA de CV</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="productos.html">Productos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="acerca.html">¿Quienes somos?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contacto.html">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="legal.html">Legal y Privacidad</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="account.php">Cuenta</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="jumbotron jumbotron-fluid" style="margin-top: 20px; margin-bottom: 10px;">
			<div class="container">
				<h1 class="display-4">Bienvenido a Sneakersun SA de CV</h1>
				<p class="lead">Sneakersun SA de CV es una empresa dedicada a la venta de calzado. <br>
					Ofrecen una variedad de opciones, desde zapatillas deportivas hasta zapatos casuales y elegantes.
					Su objetivo es proporcionar calzado de calidad para satisfacer las necesidades y preferencias de sus clientes.
					Además, se esfuerzan por ofrecer un servicio amigable y una experiencia de compra satisfactoria.
					Si estás buscando calzado cómodo, moderno y a la moda, Sneakersun es una excelente opción. 😊</p>
				<a href="acerca.html" class="btn btn-primary btn-lg" style="background-color: gray; border: none;">Más sobre nosotros</a>
			</div>
		</div>
	</header>

	<div class="container">
		<h1>Lo más destacado del mes</h1>
		<a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
		<div id="products" class="row">
			<?php
			$query = $db->query("SELECT * FROM products ORDER BY RAND() LIMIT 6");
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
			?>
					<div class="col-lg-4">
						<div class="card" style="margin: 3px; display: flex; flex-direction: column; height: 450px; align-items: center;">
							<div style="flex: 1;">
								<h5 class="card-title " style="text-align: center;"><?php echo $row["name"]; ?></h5>
								<p class="card-text" style="text-align: center;"><?php echo $row["description"]; ?></p>
							</div>
							<div style="flex: 1;">
								<img src="<?php echo $row["URLimg"]; ?>" alt="Product Image" style="height: 200px; width: auto;">
							</div>
							<div style="flex: 1;">
								<p class="lead"><?php echo '$' . $row["price"] . ' MXN'; ?></p>
								<a class="btn btn-success" style="background-color: gray; border: none;" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agrega al Carrito</a>
							</div>
						</div>

					</div>
				<?php }
			} else { ?>
				<p>Producto(s) no encontrados.....</p>
			<?php } ?>
		</div>
		<a class="btn btn-success" href="productos.html" style="background-color: gray; border: none; margin: 5px;">Ve nuestro catálogo completo</a>
	</div>

	<footer class="bg-dark text-light">
		<span class="half-br"></span>
		<div class="container py-5">
			<div class="row">
				<div class="col-md-6">
					<h4>Sneakersun SA de CV</h4>
					<p>Sneakersun SA de CV es una empresa dedicada a la venta de calzado.</p>
				</div>
				<div class="col-md-6">
					<h4>Contacto</h4>
					<ul class="list-unstyled" style="color: gray">
						<li><i class="fas fa-map-marker-alt"></i> Av. Tecnológico #123, Col. Centro, Ciudad de México</li>
						<li><i class="fas fa-phone"></i> +52 55 2411 1229</li>
						<li><i class="fas fa-envelope"></i> info@sneakersun.com.mx</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<h5>Políticas de privacidad</h5>
					<p>Respetamos la privacidad de nuestros clientes y nos comprometemos a proteger sus datos personales. Utilizamos la información que nos proporciona solo para procesar su pedido y mejorar su experiencia de compra. Nunca compartiremos su información con terceros sin su consentimiento previo.</p>
				</div>
				<div class="col-md-6">
					<h5>Redes sociales</h5>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
						<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
						<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
						<li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>