<?php

// chargement des classes
require_once('modele/BilletManager.php');
require_once('modele/CommentaireManager.php'); 

function listeBillets()
{
	$BilletManager = new \Mumu\Blog\Model\BilletManager();

	$billets = $BilletManager->getBillets();

	require ('vue/frontend/affichageAccueil.php');
}

function unBillet()
{
	$BilletManager = new \Mumu\Blog\Model\BilletManager();
	$CommentaireManager = new \Mumu\Blog\Model\CommentaireManager();

	$billet = $BilletManager->getBillet($_GET['id']);
	$commentaires = $CommentaireManager->getCommentaires($_GET['id']);

	require ('vue/frontend/affichageBillet.php');
}

function ajouterCommentaire($id_billet, $auteur, $commentaire)
{

	$CommentaireManager = new \Mumu\Blog\Model\CommentaireManager();

	$lignesAffectees = $CommentaireManager->postCommentaire($id_billet, $auteur, $commentaire);

	if($lignesAffectees === false) {
		throw new Exception('Impossible d\'ajouter un commentaire !');
	}
	else {
		header('Location: index.php?action=billet&id=' .$id_billet);
	}
}

function unCommentaire()
{
	$BilletManager = new \Mumu\Blog\Model\BilletManager();
	$CommentaireManager =  new \Mumu\Blog\Model\CommentaireManager();

	$billet = $BilletManager->getBillet($_GET['id']);
	$commentaireSelectionne = $CommentaireManager->getCommentaire($_GET['id']);

	require ('vue/frontend/affichageCommentaire.php');
}

function modifierCommentaire($id, $commentaire)
{
	$CommentaireManager = new \Mumu\Blog\Model\CommentaireManager();

	$commentaireModifie = $CommentaireManager->ModificationCommentaire($id, $commentaire);

	if($commentaireModifie === true) {
		header('Location: index.php?action=unCommentaire&id=' .$id);
	}
}	
	





