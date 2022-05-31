<?php

require_once 'includes/head.php';
require_once 'includes/nav.php';
?>

<main>
	<h3 class="text-center mb-20">Publier un nouveau un film</h3>
	<form class="container">
		<div class="mb-3">
			<label for="title">Titre</label>
			<input type="text" id="title" placeholder="Le titre du film" />
		</div>
		<div class="mb-3">
			<label for="synopsis">Synopsis</label>
			<textarea name="synopsis" id="synopsis" placeholder="description du film" cols="40" rows="10"></textarea>
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
<?php require_once 'includes/footer.php' ?>;