<?php 

    if (isset($_POST['user']) && $_POST['user']==="admin"
    && isset($_POST['psw']) && $_POST['psw']==="password") {
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../styles/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <header class="container-fluid d-flex justify-content-center align-items-center">
        <h1 class="col-m-4 text-center font-weight-bold">Page ajout produit</h1>
    </header>

    <section class="container mt-5">
        <form action="index.php" method="POST">
            <div class="form-group row">
                <label for="nom_produit" class="col-md-3 col-form-label font-weight-bold">Nom du produit:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="nom_produit2" name="titre" placeholder="Exemple : iphone 6, etc." pattern="[a-zA-Z0-9 ]+" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label font-weight-bold">Description:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="description2" name="desc" placeholder="Description du produit" pattern="[a-zA-Z0-9 é & è ç ! à ù , ; . £ * # ]+">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-3 col-form-label font-weight-bold">URL de l'image du produit</label>
                <div class="col-md-9">
                    <input type="url" class="form-control" name="image" id="image2" required placeholder='https://www.source-de-l-image.jpg'>
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_initial" class="col-md-3 col-form-label font-weight-bold">Prix initial (en €):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_initial2" name="price" placeholder="Exemple : 2€" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">Prix du clic (en cts)</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_clic2" name="clic" placeholder="Exemple : 30cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_prix" class="col-md-3 col-form-label font-weight-bold">Augmentation prix enchère (en cts):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_prix2" name="stepprice" placeholder="Exemple : 2cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold">Augmentation durée enchère (en secondes):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_duree2" name="steptime" placeholder="Exemple : 30sec" required min="1">
                </div>
			</div>

			<div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold">Date butoir de l'enchère:</label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="augmentation_duree2" name="deadline" placeholder="Exemple : 30sec" required min="1">
                </div>
            </div>

            <div class="justify-content-end d-flex row">
                <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="form2" type="submit" value="Ajouter le produit">
            </div>
        </form>
	</section>

	<?php

include '../scripts/file.php';
include '../scripts/enchere.php';

// Si les paramètres ont été envoyés (ergo, si la création d'une enchère est demandée)
if (isset($_POST['titre']) && $_POST['titre'] != ""
 && isset($_POST['desc'])  && $_POST['desc']  != ""
 && isset($_POST['price'])  && $_POST['price']  != ""
 && isset($_POST['clic'])  && $_POST['clic']  != ""
 && isset($_POST['stepprice'])  && $_POST['stepprice']  != ""
 && isset($_POST['deadline']) && $_POST['deadline'] != ""
 && isset($_POST['steptime']) && $_POST['steptime'] != ""
 && isset($_POST['image']) && $_POST['image'] != ""
 ) {
	
	// Chargement des enchères
	$cartonJson = load();
	
	$carton = [];
	$offset = 0;

	$date_deadline = new DateTime($_POST['deadline']);

	// Création des objets php
	for ($temp = 0; $temp < count($cartonJson); $temp++) {
		if ($cartonJson[$temp]["m_deadline"] > time() ) {
			$carton[$temp - $offset] = new Enchere(
											$cartonJson[$temp]["m_id"],
											$cartonJson[$temp]["m_titre"],
											$cartonJson[$temp]["m_desc"],
											$cartonJson[$temp]["m_clic"],
											$cartonJson[$temp]["m_stepprice"],
											$cartonJson[$temp]["m_price"],
											$cartonJson[$temp]["m_deadline"],
											$cartonJson[$temp]["m_steptime"],
											$cartonJson[$temp]["m_image"]
			);
		} else {
			$offset++;
		}
	}
	
	// Création et insertion de la nouvelle enchère
	$carton[$temp - $offset] = new Enchere(
										sizeof($carton),
										$_POST["titre"],
										$_POST["desc"],
										$_POST["clic"],
										$_POST["stepprice"],
										$_POST["price"],
										$date_deadline->getTimestamp(),
										$_POST["steptime"],
										$_POST["image"]
	);
	
	echo $_POST['deadline'];
	// enregistrement
	save($carton);
}

    }

    else echo 'Permission Denied';

?>

</body>

</html>