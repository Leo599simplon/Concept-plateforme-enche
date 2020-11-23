<?php
session_start();

if (
    !(isset($_SESSION['produit_un']))
    or !(isset($_SESSION['produit_deux']))
    or !(isset($_SESSION['produit_trois']))
    or !(isset($_SESSION['produit_quatre']))
    or !(isset($_SESSION['produit_cinq']))
    or !(isset($_SESSION['produit_six']))
    or !(isset($_SESSION['tab_produit2']))
) {
    $_SESSION['produit_un'] = 50;
    $_SESSION['produit_deux'] = 50;
    $_SESSION['produit_trois'] = 50;
    $_SESSION['produit_quatre'] = 50;
    $_SESSION['produit_cinq'] = 50;
    $_SESSION['produit_six'] = 50;
    $_SESSION['tab_produit2'] = [];
}
include('scripts/alimentation.php');
include('scripts/produit2.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <title>Document</title>

</head>

<body>
    <!------------------------Header-------------------------------------------------------->

    <header class="container-fluid d-flex justify-content-center align-items-center">
        <h1 class="col-m-4 text-center font-weight-bold">NOM DE L'APPLICATION</h1>
    </header>

    <section class="container-fluid pt-5">

        <!------------------------Carousel----------------------------------------------------->
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-interval="100000000">

            <ol class="carousel-indicators m-n4">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

                        <!-----------------Card 1------------------------------------->
                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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
                        <!-----------------Card 2------------------------------------->
                        <div id="slide1-prod2" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_deux'] . '€' ?></div>
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

                                        <form action="#slide1-prod2" method="POST">
                                            <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_deux" id="produit_deux" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 3------------------------------------->
                        <div id="slide1-prod3" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_trois'] . '€' ?></div>
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

                                        <form action="#slide1-prod3" method="POST">
                                            <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_trois" id="produit_trois" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 4------------------------------------->
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
                        <!-----------------Card 5------------------------------------->
                        <div id="slide1-prod5" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_cinq'] . '€' ?></div>
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

                                        <form action="#slide1-prod5" method="POST">
                                            <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_cinq" id="produit_cinq" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 6s------------------------------------->
                        <div id="slide1-prod6" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_six'] . '€' ?></div>
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

                                        <form action="#slide1-prod6" method="POST">
                                            <input class="btn btn-lg btn-warning float-right" type="submit" name="produit_six" id="produit_six" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!------------------------ Slide 2 ----------------------------->
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

                        <!-----------------Card 1------------------------------------->
                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 2------------------------------------->
                        <div id="slide2-prod2" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide2-prod2" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 3------------------------------------->
                        <div id="slide2-prod3" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide2-prod3" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 4------------------------------------->
                        <div id="slide2-prod4" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide2-prod4" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 5------------------------------------->
                        <div id="slide2-prod5" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide2-prod5" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 6s------------------------------------->
                        <div id="slide2-prod6" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide2-prod6" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!------------------------ Slide 3 ----------------------------->
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

                        <!-----------------Card 1------------------------------------->
                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 2------------------------------------->
                        <div id="slide3-prod2" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide3-prod2" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 3------------------------------------->
                        <div id="slide3-prod3" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide3-prod3" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 4------------------------------------->
                        <div id="slide3-prod4" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide3-prod4" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 5------------------------------------->
                        <div id="slide3-prod5" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide3-prod5" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-----------------Card 6s------------------------------------->
                        <div id="slide3-prod6" class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <div class="prix text-center text-danger"><?php echo $_SESSION['produit_un'] . '€' ?></div>
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

                                        <form action="#slide3-prod6" method="POST">
                                            <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Acheter">
                                        </form>
                                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!------------------------ Slide Ajout ----------------------------->
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

            <!-----------------Card 1------------------------------------->
            <?php create_html(0);?>
            <!-----------------ard 2------------------------------------->
            <?php create_html(1);?>
            <!-----------------Card 3------------------------------------->
            <?php create_html(2);?>
            <!-----------------Card 4------------------------------------->
            <?php create_html(3);?>
            <!-----------------Card 5------------------------------------->
            <?php create_html(4);?>
            <!-----------------Card 6------------------------------------->
            <?php create_html(5);?>
            
          </div>
        </div>

            </div>

            <a class="carousel-control-prev my-lg-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon text-dark font-weight-bold fas fa-angle-left" aria-hidden="true">
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next my-lg-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon text-dark font-weight-bold fas fa-angle-right" aria-hidden="true">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

</body>

</html>