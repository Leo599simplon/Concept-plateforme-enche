<?php 
//création de la fonction permettant la création d'une nouvelle carte

function create_tab()
//Création d'un tableau (clé/valeur) contenant les différentes valeurs des inputs de la section ajout_produit, dont la clé sera ensuite reportée dans la fonction create_html
{
    $tab_provi = array('nom2' => $_POST['nom_produit2'], 'description2' =>$_POST['description2'], 'image2' => $_POST['image2'],'prix_initial2' => $_POST['prix_initial2'],
    'aug_prix2'=>$_POST['augmentation_prix2'], 'aug_duree2' => $_POST['augmentation_duree2'], 'prix_clic2' => $_POST['prix_clic2'], 'disabled' => 'no'
);


//Je retourne le tableau pour pouvoir le stocker dans la session "tab_produits2"


return $tab_provi;
}
// Verification du type de requête en PHP (ici POST), si la requête est définie et non nulle (isset)
// via le button d'envoi de la fiche ajout_produit
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['form2']))
{
   
  array_push($_SESSION['tab_produit2'],create_tab());
    
}

?>
<?php 
//création de la nouvelle page dès l'ajout d'une nouvelle carte
function create_html_un()
{   
    //division des tableaux par 6 (nombre maximum de cartes par pages), le booléen est ajouté ici dans la variable pour eviter le retour à 0 de l'index des tableaux internes suivants (au lieu de repasser de [0] à [5])
        $tab_div = array_chunk($_SESSION['tab_produit2'],6,true); 
        foreach ($tab_div[0] as $key => $value) //boucle qui permet de parcourir les tableaux et créer les cartes stockées dans $_SESSION
        {
    ?>
<!-- nouvelle carte avec les clés du premier tableau ($tab_provi)-->
    <div class="col h-100 d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
        <div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> € </div>
        <img src="ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
        <div class="description border-bottom">
            <p class="descriptionDuProduit text-center"><?php  echo $value['description2']; ?></p>

        </div>
        <div class="card-body d-flex align-items-center">
            <p class="card-text">
                Prix de l'enchère:<i class="infoPrix"> +<?php echo $value['aug_prix2'] ;?>cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form method="POST">
                <!-- id du bouton lié à la clé de $tab_div -->
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="<?php echo $key ?>" id="<?php echo $key ?>" value="Acheter">
                </form>
            </div>
        </div>
    </div>
</div>
        


<?php 
            
        }
    }

?>

<?php 
function create_html_deux()
{   
    if (count($_SESSION['tab_produit2']) >= 6)
    {
        $tab_div = array_chunk($_SESSION['tab_produit2'],6,true);
        foreach ($tab_div[1] as $key => $value)
        {
    ?>

    <div class="col d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
        <div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> € </div>
        <img src="ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
        <div class="description border-bottom">
            <p class="descriptionDuProduit text-center"><?php  echo $value['description2']; ?></p>

        </div>
        <div class="card-body d-flex align-items-center">
            <p class="card-text">
                Prix de l'enchère:<i class="infoPrix"> +<?php echo $value['aug_prix2'] ;?>cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form method="POST">
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="<?php echo $key ?>" id="<?php echo $key ?>" value="Enchérir">
                </form>
            </div>
        </div>
    </div>
</div>
        


<?php 

        }
    }
}
?>

<?php 
function create_html_trois()
{   
    if (count($_SESSION['tab_produit2']) >= 12)
    {
        $tab_div = array_chunk($_SESSION['tab_produit2'],6,true);
        foreach ($tab_div[2] as $key => $value)
        {
           
    ?>

    <div class="col h-100 d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
        <div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> € </div>
        <img src="ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
        <div class="description border-bottom">
            <p class="descriptionDuProduit text-center"><?php  echo $value['description2']; ?></p>

        </div>
        <div class="card-body d-flex align-items-center">
            <p class="card-text">
                Prix de l'enchère:<i class="infoPrix"> +<?php echo $value['aug_prix2'] ;?>cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form method="POST">
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="<?php echo $key ?>" id="<?php echo $key ?>" value="Acheter">
                </form>
            </div>
        </div>
    </div>
</div>
        


<?php 
            
        }
    }
}
?>

<?php 


//Fonction pour modifier une carte d'enchère déjà créée 
function update(){

    if (isset($_POST['delete']) and $_SERVER['REQUEST_METHOD']=== "POST"){
        $j = $_POST['id_produit'];
        array_push($_SESSION['tab_histo'],$_SESSION['tab_produit2'][$j]);
        unset($_SESSION['tab_produit2'][$j]);
        $_SESSION['tab_produit2'] = array_values($_SESSION['tab_produit2']);
    }

    if (isset($_POST['form_modif']) and $_SERVER['REQUEST_METHOD']=== "POST"){
        $j = $_POST['id_produit'];
        $_SESSION['tab_produit2'][$j]['nom2'] = $_POST['nom_modif'];
        $_SESSION['tab_produit2'][$j]['description2'] = $_POST['description_modif'];
        $_SESSION['tab_produit2'][$j]['aug_prix2'] = $_POST['augmentation_prix_modif'];
        $_SESSION['tab_produit2'][$j]['image2'] = $_POST['image_modif'];
        $_SESSION['tab_produit2'][$j]['prix_initial2'] = $_POST['prix_initial_modif'];
        $_SESSION['tab_produit2'][$j]['prix_clic2'] = $_POST['prix_clic_modif'];
        $_SESSION['tab_produit2'][$j]['aug_duree2'] = $_POST['augmentation_duree_modif'];
        $_SESSION['disabled'] = $_POST['disabled'];
    }
}

?>