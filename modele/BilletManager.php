<?php

namespace Mumu\Blog\Model;

require_once('modele/Manager.php');

class BilletManager extends Manager
{

	public function getBillets()
	{
		$bdd = $this->connexionBdd();

		$billets = $bdd->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,5');
      	
        return $billets;
	}


	public function getBillet($id_billet)
	{
	        $bdd =$this->connexionBdd();

	        $req = $bdd->prepare('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
	        $req->execute(array($id_billet));
	        $billet = $req->fetch();

	        return $billet;
	}
}