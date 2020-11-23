<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">

    <title>Document</title>

</head>

<?php
//heure locale
$currenttime = time() + 3600 * 4;
//date butoir de l'enchère
$timeend =  mktime(/*heure*/10, /*minutes*/ 45, /*seconde*/ 0, /*mois*/ 11, /*jour*/ 20, /*annee*/ 2020);
$timeleft = $timeend - $currenttime;
?>


<body>

    <header class="container-fluid d-flex justify-content-center align-items-center">
        <h1 class="col-m-4 text-center font-weight-bold">NOM DE L'APPLICATION</h1>
    </header>

    <section class="container-fluid pt-5">

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

            <ol class="carousel-indicators m-n4">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row row-cols-lg-3 row-cols-1">

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <?php echo "<h5 class=\"card-title\">Durée: " . date("H:i:s", $timeleft) . "</h5>"; ?>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h5>Durée: 00:15:60</h5>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h5>Durée: 00:15:60</h5>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h5>Durée: 00:15:60</h5>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h5>Durée: 00:15:60</h5>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                        <div class="col h-100 d-flex justify-content-center my-5">
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        Prix du clic: 50cts/clic
                                        Prix de l'enchère: +2cts/clics
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h5>Durée: 00:15:60</h5>
                                    <div class="prix">Prix: 1euros </div><br>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                    <a class="btn float-right" href="#" role="button">Enchère</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon text-dark font-weight-bold" aria-hidden="true">
                    <</span> <span class="sr-only">Previous
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon text-dark font-weight-bold" aria-hidden="true">></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

</body>

</html>