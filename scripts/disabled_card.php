

<?php

session_start();


foreach ($_SESSION['tab_histo'] as $key => $value)
{
?>

<div class="col h-100 d-flex justify-content-center my-5">
<div class="card" style="width: 18rem;">
<h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
<div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> € </div>
<img src="../ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
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
            <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
        </form>
        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
    </div>
</div>
</div>
</div>


<?php } ?>