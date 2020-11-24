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
	private $m_price = 0
	/**	Date d'expiration de l'enchère */
	private $m_deadline = "";
	/**	Augmentation du temps pour une enchère */
	private $m_steptime = "";
	//public = accessible en dehors de la classe
	public function __construct($id, $titre, $desc, $clic, $stepprice, $price, $deadline, $steptime) {
		$this->m_id         = $id;
		$this->m_titre      = $titre;
		$this->m_desc       = $desc;
		$this->m_clic       = $clic;
		$this->m_stepprice  = $stepprice;
		$this->m_price      = $price;
		$this->m_deadline   = $deadline;
		$this->m_steptime   = $steptime;
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
		$this->m_time += $steptime;
	}
	
	/**
		Méthode de sérialisation
	*/
	public function jsonSerialize() {
		return array(
				   "m_id"        => $this->m_id;
		           "m_titre"     => $this->m_titre,
		           "m_desc"      => $this->m_desc,
		           "m_clic"      => $this->m_clic,
		           "m_stepprice" => $this->m_stepprice,
		           "m_price"     => $this->m_price,
				   "m_deadline"  => $this->m_deadline,
				   "m_steptime"  => $this->m_steptime;
				   );
	}
}
?>