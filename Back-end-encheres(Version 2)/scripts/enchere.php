<?php

//Création de la classe "Enchère"
//"implements JsonSerializable" permet aux instances de classe d'hériter de l'interface JsonSerializable qui permet l'utilisation de methodes tel que jsonSerialization()
class Enchere implements JsonSerializable {
	//private = accessible qu'à la classe
	private $m_titre = "";
	private $m_desc = "";
	/**	Prix du clic en centimes */
	private $m_clic = 0;
	/**	Montée de l'enchère en centimes */
	private $m_step = 0;
	/**	Date d'expiration de l'enchère */
	private $m_time = "";
	//public = accessible en dehors de la classe
	public function __construct($titre, $desc, $clic, $step, $prix, $time) {
		$this->m_titre = $titre;
		$this->m_desc  = $desc;
		$this->m_clic  = $clic;
		$this->m_step  = $step;
		$this->m_prix  = $prix;
		$this->m_time  = $time;
	}
	
	/**
		Écrit le code HTML pour afficher l'enchère
	*/
	public function display() {
		echo "<div class=\"col-1 col-12 col-md-8 col-lg-4 \">";
		echo "    <div class=\"card-deck \">";
        echo "        <div class=\"card border-primary mb-3\" >";
        echo "            <h4 class=\"card-header text-center\">" . $this->m_titre . "</h4>";
        echo "            <div class=\"card-body text-primary\">";
        echo "                <h5 class=\"card-title\">Description</h5>";
        echo "                <p class=\"card-text\">" . $this->m_desc . "</p>";
        echo "            </div>";
        echo "            <div class=\"card\">";
        echo "                <img class=\"card-img-top\" src=\"../media/iphone.jpg\" alt=\"Card image cap\">";
        echo "                <div class=\"card-body\">";
        echo "                    <h5 class=\"card-title\">Prix du clic: " . $this->m_clic . "cts/clic</h5>";
        echo "                    <p class=\"card-text\"></p>";
        echo "                </div>";
        echo "                <div class=\"card-body\">";
        echo "                    <h5 class=\"card-title\">Prix de l'enchère: +" . $this->m_step . "cts/clics</h5>";
        echo "                    <p class=\"card-text\"></p>";
        echo "                </div>";

        echo "                <div class=\"card-footer\">";
        echo "                    <h5 class=\"card-title\">Durée: " . date("H:i:s", - $this->m_time - time() -3600) . "</h5>";

        echo "                    <div class=\"prix text-center\">" . $this->m_prix . " € </div><br>";
        //echo "                    <small class=\"text-muted\">Last updated 3 mins ago</small>";

        echo "                    <form metod=\"post\">";
        echo "                    	<button class=\"btn btn-primary float-right\" formmethod=\"post\">Enchère";
		/* formmethod="post" : le paramètre "enchere" n'apparaît pas dans l'URL.
		   Actualiser la page fera apparaître un message d'avertissement pour éviter de renvoyer une enchère par erreur
		   ----->         ----->         ----->         ----->         ----->         ----->         ----->      vvvvvvvvvvvvvvvvvvv */
        echo "                    		<input type=\"hidden\" name=\"enchere\" value=\"" . $this->m_titre . "\" formmethod=\"post\">";
        echo "                    	</button>";
        echo "                    </form>";

        echo "                </div>";
        echo "            </div>";
        echo "        </div>";
        echo "    </div>";
        echo "</div>";
	}
	
	/** 
		Renvoie le titre de l'enchère
	*/
	public function getTitre() {
		return $this->m_titre;
	}
	
	/**
		Mets à jour le prix et la durée de vie de l'enchère
	*/
	public function enchere() {
		$this->m_prix += $this->m_step / 100;
		$this->m_time += 30;
	}
	
	/**
		Méthode de sérialisation
	*/
	public function jsonSerialize() {
		return array(
		           "m_titre" => $this->m_titre,
		           "m_desc" => $this->m_desc,
		           "m_clic" => $this->m_clic,
		           "m_step" => $this->m_step,
		           "m_prix" => $this->m_prix,
		           "m_time" => $this->m_time
				   );
	}
}
?>