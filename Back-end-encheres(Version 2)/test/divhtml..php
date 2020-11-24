<div id="slide1-prod4" class="col h-100 d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
        <div class="prix text-center text-danger"><?php echo $_SESSION['produit_quatre'] . '€' ?></div>
        <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
        <div class="description border-bottom">
            <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

        </div>
        <div class="card-body d-flex align-items-center">
            <p class="card-text">
                Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
            </p>
        </div>
        <div class="card-footer d-flex flex-column justify-content-around">
            <h6>Durée:
                <div class="float-right pr-5 font-weight-bold"> 00:15:60</div>
            </h6>

            <div class="d-flex align-items-center justify-content-center">

                <form action="#slide1-prod4" method="POST">
                    <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_quatre" id="produit_quatre" value="Acheter">
                </form>
                <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
            </div>
        </div>
    </div>
</div>