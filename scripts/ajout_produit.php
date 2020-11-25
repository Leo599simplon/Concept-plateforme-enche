<?php 
    
   if ( isset($_POST['user']) and $_POST['user'] === "admin"  
   and isset($_POST['mdp']) and $_POST['mdp'] === "test")
        {


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/style.css">

    <title>Page pour ajouter un produit</title>
</head>

<body>
            
            <div class="justify-content-center d-flex row">
                <a href="suprimer_produit.php">
                <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="" type="button" OnClick="" value="Suprimer un produit">
                </a>
            </div>
    <header class="container-fluid d-flex justify-content-center align-items-center">
        <h1 class="col-m-4 text-center font-weight-bold">Page ajout produit</h1>
        <a href="modification.php">Modifier une enchère</a>
    </header>

    <section class="container mt-5">
        <form action="../index.php" method="POST">
            <div class="form-group row">
                <label for="nom_produit" class="col-md-3 col-form-label font-weight-bold">Nom du produit:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="nom_produit2" name="nom_produit2" placeholder="Exemple : iphone 6, etc." pattern="[a-zA-Z0-9 ]+" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label font-weight-bold">Description:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="description2" name="description2" placeholder="Description du produit" pattern="[a-zA-Z0-9 é & è ç ! à ù , ; . £ * # ]+">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-3 col-form-label font-weight-bold">Image du produit</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="image2" id="image2" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_initial" class="col-md-3 col-form-label font-weight-bold">Prix initial (en €):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_initial2" name="prix_initial2" placeholder="Exemple : 2€" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">Prix du clic (en cts)</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_clic2" name="prix_clic2" placeholder="Exemple : 30cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_prix" class="col-md-3 col-form-label font-weight-bold">Augmentation prix enchère (en cts):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_prix2" name="augmentation_prix2" placeholder="Exemple : 2cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold">Augmentation durée enchère (en secondes):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_duree2" name="augmentation_duree2" placeholder="Exemple : 30sec" required min="1">
                </div>
            </div>

            <div class="justify-content-end d-flex row">
                <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="form2" type="submit" value="Ajouter le produit">
            </div>
        </form>
        
    </section>
</body>

</html>

<?php 

    }
    else {
        
        echo 'Permission refusée';
    }
    
   
?>