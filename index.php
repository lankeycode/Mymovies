<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>My movies</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<link rel="stylesheet" href="./styles/main.css" />

</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<div class="logoContainer">
					<a class="navbar-brand" href="./index.php">
						<img class="logo" src="./images/cinema-penguin.png" alt="logo du site" />
					</a>
				</div>
				<div class="social">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-youtube"></i></a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Acceuil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./views/create.php">Publier</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="input-group">
		<div class="form-outline">
			<input type="search" id="formSearch" class="form-control" />
			<label class="form-label" for="formSearch">Trouver un film</label>
		</div>
		<button type="button" class="btn searchBtn btn-primary">
			<i class="fas fa-search"></i>
		</button>
	</div>


	<h1>My Movies</h1>

	<img class="Image" src="./images/3D_Glasses_2_by_Merlin2525.png" alt="#">

	<div class="card m-5" style="width: 18rem">
		<img src="./images/th.jpg" class="card-img-top" alt="..." />
		<div class="card-body">
			<h5 class="card-title">Titre du film</h5>
			<h6 class="card-subtitle mb-2 text-muted">Catégorie</h6>
			<p class="card-text">
				Some quick example text to build on the card title and make
				up the bulk of the card's content.
			</p>


			<a href="#" class="btn download " data-bs-toggle="tooltip" data-bs-placement="top" title="Ajouter un film"><i class="fa-solid fa-download"></i></a>
			<a href="#" class="btn delete " data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer un film"><i class="fa-solid fa-trash-can"></i></a>


		</div>
	</div>
	<footer>
		&copy; <?php
				$fromYear = 2021;
				$thisYear = (int)date('Y');
				echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : ''); ?> MyMovies.
	</footer>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="./scripts/script.js"></script>
</body>

</html>