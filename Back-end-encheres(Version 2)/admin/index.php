<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- jQuery and JS bundle w/ Popper.js
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="../styles/style.css">
	<title>Document</title>
</head>

<body>

	<header class="container-fluid d-flex justify-content-center align-items-center ">
		<h1 class="col-m-4 text-center">En'Cher</h1>
	</header>

	<section class="container">

		<div class="row d-flex justify-content-center bg-dark pt-5">
			<div class="col-1 col-12 col-md-12 col-lg-4 ">
				<div class="card-deck ">
					<div class="card border-primary mb-3">
						<h4 class="card-header text-center">Nouvelle enchère</h4>
						<form metod="post">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Titre</h5>
									<input class="card-text" type="text" name="titre" name="titre" formmethod="post" />
								</div>

								<div class="card-body">
									<h5 class="card-title">Description</h5>
									<input class="card-text" type="text" name="desc" name="desc" formmethod="post" />
								</div>

								<div class="card-body">
									<h5 class="card-title">Prix de départ</h5>
									<input class="card-text" type="text" name="prix" name="prix" formmethod="post" /> euros
								</div>

								<div class="card-body">
									<h5 class="card-title">Prix du clic</h5>
									<input class="card-text" type="text" name="clic" name="clic" formmethod="post" /> cts/clics
								</div>

								<div class="card-body">
									<h5 class="card-title">Prix de l'enchère</h5>
									<input class="card-text" type="text" name="step" name="step" formmethod="post" /> cts/clics
								</div>

								<div class="card-footer">
									<input class="btn btn-primary float-right" type="submit" name="enchere" value="Valider" formmethod="post">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php

	include '../scripts/file.php';
	include '../scripts/enchere.php';

	// Si les paramètres ont été envoyés (ergo, si la création d'une enchère est demandée)
	if (
		isset($_POST['id']) && $_POST['id'] != ""
		&& isset($_POST['titre']) && $_POST['titre'] != ""
		&& isset($_POST['desc'])  && $_POST['desc']  != ""
		&& isset($_POST['price'])  && $_POST['price']  != ""
		&& isset($_POST['clic'])  && $_POST['clic']  != ""
		&& isset($_POST['stepprice'])  && $_POST['stepprice']  != ""
		&& isset($_POST['deadline']) && $_POST['deadline'] != ""
		&& isset($_POST['steptime']) && $_POST['steptime'] != ""
	) {

		// Chargement des enchères
		$cartonJson = load();

		$carton = [];
		$offset = 0;

		// Création des objets php
		for ($temp = 0; $temp < count($cartonJson); $temp++) {
			if ($cartonJson[$temp]["m_deadline"] > time()) {
				$carton[$temp - $offset] = new Enchere(
					$cartonJson[$temp]["m_id"],
					$cartonJson[$temp]["m_titre"],
					$cartonJson[$temp]["m_desc"],
					$cartonJson[$temp]["m_clic"],
					$cartonJson[$temp]["m_stepprice"],
					$cartonJson[$temp]["m_price"],
					$cartonJson[$temp]["m_deadline"],
					$cartonJson[$temp]["m_steptime"]
				);
			} else {
				$offset++;
			}
		}

		// Création et insertion de la nouvelle enchère
		$carton[$temp - $offset] = new Enchere(
			sizeof($json),
			$_POST["titre"],
			$_POST["desc"],
			$_POST["clic"],
			$_POST["stepprice"],
			$_POST["price"],
			$_POST["deadline"],
			$_POST["steptime"]
		);

		// enregistrement
		save($carton);
	}

	?>

</body>

</html>