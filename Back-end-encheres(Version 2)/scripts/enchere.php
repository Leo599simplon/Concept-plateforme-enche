<?php

//Création de la classe "Enchère"
//"implements JsonSerializable" permet aux instances de classe d'hériter de l'interface JsonSerializable qui permet l'utilisation de methodes tel que jsonSerialization()
class Enchere implements JsonSerializable {
	//private = accessible qu'à la classe
	/** Id du produit */
	private $m_id = 0;
	/** Titre du produit */
	private $m_titre = "";
	/** Description du produit */
	private $m_desc = "";
	/**	Prix du clic en centimes */
	private $m_clic = 0;
	/**	Montée de l'enchère en centimes */
	private $m_stepprice = 0;
	/**Prix du produit */
	private $m_price = 0;
	/**	Date d'expiration de l'enchère */
	private $m_deadline = "";
	/**	Augmentation du temps pour une enchère */
	private $m_steptime = "";
	/** Image du produit */
	private $m_image = '';
	//public = accessible en dehors de la classe
	public function __construct($id, $titre, $desc, $clic, $stepprice, $price, $deadline, $steptime, $image) {
		$this->m_id         = $id;
		$this->m_titre      = $titre;
		$this->m_desc       = $desc;
		$this->m_clic       = $clic;
		$this->m_stepprice  = $stepprice;
		$this->m_price      = $price;
		$this->m_deadline   = $deadline;
		$this->m_steptime   = $steptime;
		$this->m_image      = $image;
	}
	/**
		Écrit le code HTML pour afficher l'enchère
	*/
	public function display() {
		echo " <div class='card text-center border-primary mb-3'> ";
		echo "	 <div class='card-header'>";
		echo "		<h4 class='card-title prix'>" . $this->m_price . " €</h4>";
		echo "		<h5 class='card-title'>" . $this->m_titre . "</h5>";
		echo "	 </div>";
        echo "	 <img class='card-img-top' src='\" . $this->m_image . \"' alt=''>";
		echo "	 <div class='card-body text-primary'>";
		echo "		<h6 class='card-title'> Durée: " . date("H:i:s", - $this->m_deadline - time() -3600) . "</h6>";
		echo "		<p class='card-text'> " . $this->m_desc . "</p>";
		echo "		<p class='card-text'> Temps : + " . $this->m_stepprice . " cts/clic</p>";
		echo "		<p class='card-text'> Prix : + " . $this->m_steptime . " s/clics</p>";
		echo "	 </div>";
		echo "   <div class=\"card-footer\">";
        echo "       <form class='d-flex justify-content-center' metod=\"post\">";
        echo "           <button class=\"btn btn-primary float-right\" formmethod=\"post\">Enchère";
		// L'attribut : formmethod="post" : permet que le paramètre "enchere" n'apparaît pas dans l'URL.
		//  Actualiser la page fera apparaître un message d'avertissement pour éviter de renvoyer une enchère par erreur
        echo "                <input type=\"hidden\" name=\"enchere\" value=\"" . $this->m_id . "\" formmethod=\"post\">";
        echo "            </button>";
        echo "        </form>";
        echo "    </div>";
		echo " </div>";
		/*echo "<div class=\"col-1 col-12 col-md-8 col-lg-4 \">";
		echo "    <div class=\"card-deck \">";
		echo "        <div class=\"card border-primary mb-3\" >";
		echo "            <h4 class=\"prix text-center\">" . $this->m_price . " € </h4>";
		echo "            <h5 class=\"card-title\"> Durée: " . date("H:i:s", - $this->m_deadline - time() -3600) . "</h5>";
		echo "            <div class=\"card-body text-primary\">";
		echo "				  <div class='card-header'"
		echo "            	  	<h4 class=\"card-header text-center\">" . $this->m_titre . "</h4>";
        echo "                	<h5 class=\"card-title\">Description</h5>";
        echo "                <p class=\"card-text\">" . $this->m_desc . "</p>";
        echo "            </div>";
        echo "                <img class=\"card-img-top\" src=\"" . $this->m_image . "\" alt=\"Card image cap\">";
		echo "                <div class=\"card-body\">";
        echo "                    <h5 class=\"card-title\"> Temps : + " . $this->m_stepprice . " cts/clic</h5>";
        echo "                </div>";
        echo "                <div class=\"card-body\">";
        echo "                    <h5 class=\"card-title\"> Prix : + " . $this->m_steptime . " s/clics</h5>";
        echo "                    <p class=\"card-text\"></p>";
        echo "                </div>";

        echo "                <div class=\"card-footer\">";

        //echo "                    <small class=\"text-muted\">Last updated 3 mins ago</small>";

        echo "                    <form metod=\"post\">";
        echo "                    	<button class=\"btn btn-primary float-right\" formmethod=\"post\">Enchère";
		// L'attribut : formmethod="post" : permet que le paramètre "enchere" n'apparaît pas dans l'URL.
		//  Actualiser la page fera apparaître un message d'avertissement pour éviter de renvoyer une enchère par erreur
        echo "                    		<input type=\"hidden\" name=\"enchere\" value=\"" . $this->m_id . "\" formmethod=\"post\">";
        echo "                    	</button>";
        echo "                    </form>";
        echo "                </div>";
        echo "        </div>";
        echo "    </div>";
        echo "</div>";*/
	}
	
	/** 
		Renvoie l'Id' de l'enchère
	*/
	public function getId() {
		return $this->m_id;
	}
	
	/**
		Mets à jour le price et la durée de vie de l'enchère
	*/
	public function enchere() {
		$this->m_price += $this->m_stepprice / 100;
		$this->m_deadline += $this->m_steptime;
	}
	
	/**
		Méthode de sérialisation
	*/
	public function jsonSerialize() {
		return array(
				   "m_id"        => $this->m_id,
		           "m_titre"     => $this->m_titre,
		           "m_desc"      => $this->m_desc,
		           "m_clic"      => $this->m_clic,
		           "m_stepprice" => $this->m_stepprice,
		           "m_price"     => $this->m_price,
				   "m_deadline"  => $this->m_deadline,
				   "m_steptime"  => $this->m_steptime,
				   "m_image"     => $this->m_image
				   );
	}
}
?>