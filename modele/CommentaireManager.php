<?php

namespace Mumu\Blog\Model;

require_once('modele/Manager.php');

class CommentaireManager extends Manager
{
    public function getCommentaires($id_billet)
    {
        $bdd = $this->connexionBdd();

        $commentaires = $bdd->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC');
        $commentaires->execute(array($id_billet));

        return $commentaires;
    }

    public function postCommentaire($id_billet, $auteur, $commentaire)
    {
        $bdd = $this->connexionBdd();

        $commentaires = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
        $lignesAffectees = $commentaires->execute(array($id_billet, $auteur, $commentaire));

        return $lignesAffectees;
    }

    public function getCommentaire($id)
    {
        $bdd = $this->connexionBdd();

        $req = $bdd->prepare('SELECT id, id_billet, auteur, commentaire, date_commentaire FROM commentaires WHERE id = ?');
        $req->execute(array($id));
        $commentaireSelectionne = $req->fetch();

        return $commentaireSelectionne;
    }

    public function ModificationCommentaire($id, $commentaire)
    {
        $bdd = $this->connexionBdd();

        $commentaireModifie = $bdd->prepare('UPDATE commentaires SET commentaire = :commentaire_nv, date_commentaire = NOW() WHERE id = :id ');
        $commentaireAffecte = $commentaireModifie->execute(array(
            'id' => $_GET['id'],
            'commentaire_nv' => $_POST['commentaire'],
        ));

        return $commentaireAffecte;
    }


    // suprime un commentaire
    public function deleteCommentaire($id)
    {

        $bdd = $this->connexionBdd();
        $commentaireSupprimme = $bdd->prepare('DELETE FROM commentaires WHERE commentaires id = :id ');
        $stmt = $bdd->query($commentaireSupprimme);

        return $stmt;

    }

}


