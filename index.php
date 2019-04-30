<?php

require('controleur/frontend.php');

try {
	if(isset($_GET['action'])) {
		if($_GET['action'] == 'listeBillets') {
			listeBillets();
		}
		elseif ($_GET['action'] == 'billet'){
			if(isset($_GET['id']) AND $_GET['id'] > 0) {
				unBillet();
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé.'); 
			}
		}
		elseif($_GET['action'] == 'ajouterCommentaire') {
			if(isset($_GET['id']) AND $_GET['id'] > 0) {
				if(!empty($_POST['auteur']) AND !empty($_POST['commentaire'])) {
					ajouterCommentaire($_GET['id'], $_POST['auteur'], $_POST['commentaire']);
				}
				else {
					throw new Exception('Vous n\'avez pas rempli tous les champs.');
				}
			}
			else {
			throw new Exception('Aucun identifiant de billet envoyé.');
			}
		}

		elseif($_GET['action'] == 'unCommentaire')
		{
			if(isset($_GET['id']) AND $_GET['id'] > 0) {
				unCommentaire();
			}
			else {
				throw new Exception('Aucun commentaire ne s\'affiche');
			}
		}
		elseif($_GET['action'] == 'modifierCommentaire') {
			if(isset($_GET['id']) AND $_GET['id'] > 0) {
				if(!empty($_POST['commentaire'])) {
					modifierCommentaire($_GET['id'], $_POST['commentaire']);
				}
				else {
					throw new Exception('Impossible de modifier le commentaire'); 
				}
			}	
			else {
				throw new Exception ('Aucun identifiant envoyé');
			}
		}

	}

	else {
		listeBillets();
	}
} 

catch(Exception $e) 
{
	echo 'Erreur : ' . $e->getMessage();
}

