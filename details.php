<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Restaurant</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js"></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

</head>

<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
		<div class="header-brand full-box">
			<a href="index.php">
				<img src="./assets/img/logo.png" alt="Designlopers" class="img-fluid">
			</a>
		</div>

		<div class="header-options full-box">
			<nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()">
				<ul class="list-unstyled full-box">
					<li>
						<a href="index.php">Inicio</a>
					</li>
					<li>
						<a href="menu.php">Menú</a>
					</li>
					<li>
						<a href="registration.php">Regístrate</a>
					</li>
					<li>
						<a href="signin.php">Login</a>
					</li>
				</ul>
			</nav>
			<a href="bag.php" class="header-button full-box text-center" title="Carrito">
				<i class="fas fa-shopping-bag"></i>
				<span class="badge bg-primary rounded-pill bag-count">2</span>
			</a>

			<div class="header-button full-box text-center" id="userMenu" data-mdb-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false" title="Nombre de usuario">
				<i class="fas fa-user-circle"></i>
			</div>
			<div class="dropdown-menu div-bordered popup-login" aria-labelledby="userMenu">
				<p class="text-center" style="padding-top: 10px;">
					<i class="fas fa-user-circle fa-3x"></i><br>
					<small>Nombre de usuario</small>
				</p>
				<a class="dropdown-item" href="javascript:void(0);">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
				</a>
				<a class="dropdown-item" href="javascript:void(0);">
					<i class="fas fa-sign-out-alt"></i> &nbsp; Cerrar sesión
				</a>
			</div>

			<a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú"
				onclick="show_menu_mobile()">
				<i class="fas fa-bars"></i>
			</a>
		</div>
	</header>


	<!-- Content -->
	<div class="container container-web-page">
		<h3 class="font-weight-bold poppins-regular text-uppercase">Detalles de platillo</h3>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-5">
					<!--cover-->
					<figure class="full-box">
						<img class="img-fluid" src="./assets/platillos/platillo.jpg" alt="platillo_">
					</figure>

					<!-- Galery -->
					<h5 class="poppins-regular text-uppercase" style="padding-top: 70px;">Galería de imágenes</h5>
					<hr>
					<div class="galery-details full-box">

						<!--cover-->
						<figure class="full-box">
							<a data-fslightbox="gallery" href="./assets/img/banner_3.jpg">
								<img class="img-fluid" src="./assets/img/banner_3.jpg" alt="platillo_">
							</a>
						</figure>

						<!--otras-->
						<figure class="full-box">
							<a data-fslightbox="gallery" href="./assets/img/banner_1.jpg">
								<img class="img-fluid" src="./assets/img/banner_1.jpg" alt="platillo_">
							</a>
						</figure>

						<figure class="full-box">
							<a data-fslightbox="gallery" href="./assets/img/banner_2.jpg">
								<img class="img-fluid" src="./assets/img/banner_2.jpg" alt="platillo_">
							</a>
						</figure>

					</div>
				</div>
				<div class="col-12 col-lg-7">

					<h4 class="font-weight-bold poppins-regular tittle-details">Nombre del platillo o bebida</h4>

					<p class="text-justify lead" style="padding: 40px 0;">
						<span class="text-info lead font-weight-bold">Descripción:</span><br>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis obcaecati, corporis nam
						ab officiis modi nesciunt iure repudiandae vel! Illum minus sapiente sunt quibusdam vero
						voluptate sequi eaque consectetur perferendis!
					</p>

					<p class="lead font-weight-bold">Precio: $25.00 USD</p>

					<!-- Agregar al carrito -->
					<form action="" style="padding-top: 70px;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-outline mb-4">
										<input type="text" value="1" class="form-control text-center" id="product_cant"
											pattern="[0-9]{1,10}" maxlength="10">
										<label for="product_cant" class="form-label">Cantidad</label>
									</div>
								</div>
								<div class="col-12 col-md-6 text-center">
									<button type="submit" class="btn btn-info"><i class="fas fa-shopping-bag fa-fw"></i>
										&nbsp; Agregar al carrito</button>
								</div>
							</div>
						</div>
					</form>

					<!-- Actualizar el carrito -->
					<form action="" style="padding-top: 70px;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-outline mb-4">
										<input type="text" value="1" class="form-control text-center" id="product_cant"
											pattern="[0-9]{1,10}" maxlength="10">
										<label for="product_cant" class="form-label">Cantidad</label>
									</div>
								</div>
								<div class="col-12 col-md-6 text-center">
									<button type="submit" class="btn btn-success"><i class="fas fa-sync fa-fw"></i>
										&nbsp; Actualizar carrito</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold"><i class="far fa-copyright"></i> Carlos Alfaro 2021</h5>
						</li>
						<li> Todos los derechos reservados </li>
					</ul>
				</div>
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold">El Salvador</h5>
						</li>
						<li><i class="fas fa-map-marker-alt fa-fw"></i> San Salvador, El Salvador, Centro América</li>
					</ul>
				</div>
				<div class="col-12 col-md-4">
					<ul class="list-unstyled">
						<li>
							<h5 class="font-weight-bold">Siguenos en:</h5>
						</li>
						<li>
							<a href="https://es-la.facebook.com/CarlosAlfaroES/" class="footer-link" target="_blank">
								<i class="fab fa-facebook fa-fw"></i> Facebook
							</a>
						</li>

						<li>
							<a href="https://www.youtube.com/c/CarlosAlfaro007" class="footer-link" target="_blank">
								<i class="fab fa-instagram fa-fw"></i> Instagram
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js"></script>

	<!-- fslightbox -->
	<script src="./js/fslightbox.js"></script>

	<!-- General scripts -->
	<script src="./js/main.js"></script>
</body>

</html>