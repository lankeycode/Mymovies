<?php

require_once 'includes/head.php';
require_once 'includes/nav.php';
?>

<main>
	<h3 class="text-center mb-20">Publier un nouveau un film</h3>
	<br>
	<form class="container" method="POST">
		<div class="mb-3">
			<label for="title">Titre</label>
			<input type="text" id="title" placeholder="Le titre du film" />
		</div>
		<div class="mb-3">
			<label for="description">Déscription</label>
			<textarea name="description" id="description" placeholder="description du film" cols="40" rows="10"></textarea>
		</div>
		<div class="mb-3">
			<div>
				<label for="url">Url de l'image du film</label>
			</div>
			<input type="text" name="url" id="url">
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
		<div class="position-relative mt-3 ">
			<input type="submit" value="publier" class="btn publish btn-primary position-absolute start-50 translate-middle-x mb-5" />
		</div>
	</form>
</main>
<?php require_once 'includes/footer.php' ?>;