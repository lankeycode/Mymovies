<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<link rel="stylesheet" href="../styles/main.css" />

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg ">
			<div class="container-fluid">
				<div class="logoContainer">
					<a class="navbar-brand" href="#">
						<img class="logo" src="../images/cinema-penguin.png" alt="logo du site" />
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="../index.php">Accueil</a>
						</li>
						<li class="nav-item">

							<a class="nav-link active" aria-current="page" href="./create.php">Publier</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<h3 class="text-center mb-20">Publier un nouveau un film</h3>
		<form class="container">
			<div class="mb-3">
				<label for="title">Titre</label>
				<input type="text" id="title" placeholder="Le titre du film" />
			</div>
			<div class="mb-3">
				<label for="synopsis">Synopsis</label>
				<textarea name="synopsis" id="synopsis" cols="40" rows="10"></textarea>
			</div>
			<!-- <input type="text" /> -->
			<label for="category"></label>
			<select name="categoryId" id="category">
				<option value="" selected>
					- selectionner une catégorie
				</option>
				<option value="1">Comedie</option>
				<option value="2">Action</option>
				<option value="3">Jeunesse</option>
				<option value="4">Horreur</option>
				<option value="5">Drame</option>
			</select>

			<input type="submit" value="publier" class="btn btn-primary" />
		</form>
	</main>
	<footer></footer>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>