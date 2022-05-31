<?php

require_once 'includes/head.php';
require_once 'includes/nav.php';
?>

<!-- <header>
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
</header> -->
<div class="input-group">
	<div class="form-outline">
		<input type="search" id="formSearch" class="form-control" />
		<label class="form-label" for="formSearch">Trouver un film</label>
	</div>
	<button class="" type="button" class="btn searchBtn btn-primary">
		<i class="fas fa-search"></i>
	</button>
</div>


<h1>My Movies</h1>

<div class="test"></div>

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
<?php require_once 'includes/footer.php' ?>;