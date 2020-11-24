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