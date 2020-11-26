<?php
//création de la fonction permettant la création d'une nouvelle carte

function create_tab()
//Création d'un tableau (clé/valeur) contenant les différentes valeurs des inputs de la section ajout_produit, dont la clé sera ensuite reportée dans la fonction create_html
{
    $tab_provi = array(
        'nom2' => $_POST['nom_produit2'], 'description2' => $_POST['description2'], 'image2' => $_POST['image2'], 'prix_initial2' => $_POST['prix_initial2'],
        'aug_prix2' => $_POST['augmentation_prix2'], 'aug_duree2' => $_POST['augmentation_duree2'], 'prix_clic2' => $_POST['prix_clic2'], 'disabled' => 'no'
    );


    //Je retourne le tableau pour pouvoir le stocker dans la session "tab_produits2"


    return $tab_provi;
}
// Verification du type de requête en PHP (ici POST), si la requête est définie et non nulle (isset)
// via le button d'envoi de la fiche ajout_produit
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['form2'])) {

    array_push($_SESSION['tab_produit2'], create_tab());
}

//création de la nouvelle page dès l'ajout d'une nouvelle carte
function create_html_un()
{
    //division des tableaux par 6 (nombre maximum de cartes par pages), le booléen est ajouté ici dans la variable pour eviter le retour à 0 de l'index des tableaux internes suivants (au lieu de repasser de [0] à [5])
    $tab_div = array_chunk($_SESSION['tab_produit2'], 6, true);

    //boucle qui permet de parcourir les tableaux et créer les cartes stockées dans $_SESSION
    foreach ($tab_div[0] as $key => $value) {
        include '../ressources/templates/card.php';
    }
}

function create_html_deux()
{
    if (count($_SESSION['tab_produit2']) >= 6) {
        $tab_div = array_chunk($_SESSION['tab_produit2'], 6, true);
        foreach ($tab_div[1] as $key => $value) {
            include '../ressources/templates/card.php';
        }
    }
}

function create_html_trois()
{
    if (count($_SESSION['tab_produit2']) >= 12) {
        $tab_div = array_chunk($_SESSION['tab_produit2'], 6, true);
        foreach ($tab_div[2] as $key => $value) {
            include '../ressources/templates/card.php';
        }
    }
}

//Fonction pour modifier une carte d'enchère déjà créée 
function update()
{

    if (isset($_POST['delete']) and $_SERVER['REQUEST_METHOD'] === "POST") {
        $j = $_POST['id_produit'];
        array_push($_SESSION['tab_histo'], $_SESSION['tab_produit2'][$j]);
        unset($_SESSION['tab_produit2'][$j]);
        $_SESSION['tab_produit2'] = array_values($_SESSION['tab_produit2']);
    }

    if (isset($_POST['form_modif']) and $_SERVER['REQUEST_METHOD'] === "POST") {
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

<script>
    /**
     * faire une fonction qui créer une liste de nombre croissant
     * Attribuer chaque nombre aux nouvelles cards en tant qu'ID pour pouvoir les identifier par la suite
     */
    let carousel = [];
</script>