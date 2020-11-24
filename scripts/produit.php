<?php 

function create_tab()
{
    $tab_provi = array('nom2' => $_POST['nom_produit2'], 'description2' =>$_POST['description2'], 'image2' => $_POST['image2'],'prix_initial2' => $_POST['prix_initial2'],
    'aug_prix2'=>$_POST['augmentation_prix2'], 'aug_duree2' => $_POST['augmentation_duree2'], 'prix_clic2' => $_POST['prix_clic2']
);


//Je retourne le tableau provisoire pour pouvoir le stocker dans le tableau principal


return $tab_provi;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['form2']))
{
   
  array_push($_SESSION['tab_produit2'],create_tab());
    
}

/*

function create_html($i)
{
    if (count($_SESSION['tab_produit2']) > $i)
    {
   
    
    echo '<div class="col h-100 d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center py-2 border-bottom">'.$_SESSION['tab_produit2'][$i]['nom2'].'</h5>
        <div class="prix text-center text-danger">'.$_SESSION['tab_produit2'][$i]['prix_initial2'] . '€ </div>
        <img src="ressources/img/'.$_SESSION['tab_produit2'][$i]['image2'].'" class="card-img-top border-bottom" alt="...">
        <div class="description border-bottom">
            <p class="descriptionDuProduit text-center">'.$_SESSION['tab_produit2'][$i]['description2'].'</p>

        </div>
        <div class="card-body d-flex align-items-center">
            <p class="card-text">
                Prix de l\'enchère:<i class="infoPrix"> +'.$_SESSION['tab_produit2'][$i]['aug_prix2'].'cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form method="POST">
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                </form>
                <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
            </div>
        </div>
    </div>
</div>';
        
}
else {echo '';}
}
*/

?>
<?php 
function create_html_deux()
{
        foreach ($_SESSION['tab_produit2'] as $key => $value)
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
                Prix de l\'enchère:<i class="infoPrix"> +<?php echo $value['aug_prix2'] ;?>cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form method="POST">
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Enchérir">
                </form>
                <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
            </div>
        </div>
    </div>
</div>
        


<?php 

        }
    }

?>