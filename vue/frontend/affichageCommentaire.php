<?php $title =  htmlspecialchars($commentaireSelectionne['id']); ?> <!--ajouter "Commentaire n°"   ???? -->

<?php ob_start(); ?> <!-- mise en mémoire de la sortie HTML -->
    <h1>Mon super blog !</h1>
    <p>Modifier un commentaire</p>
    <p><a href="index.php">Retour à la liste des articles</a></p>

    <div class="container">
        <div class="row">
            <h3>
                <p>Numéro de billet : <?= $commentaireSelectionne['id_billet'] ?></p> </h3> <!-- comment ajouter le titre du billet ?-->
        </div>
        <div class="row">

            Commentaire de :
            <strong><?= htmlspecialchars($commentaireSelectionne['auteur']); ?></strong><br />

            <em>Le <?= $commentaireSelectionne['date_commentaire']; ?></em>

            <p><?= nl2br(htmlspecialchars($commentaireSelectionne['commentaire'])); ?></p>

        </div>




    </div>


    <div class="container">

    </div>
    
        <form action="index.php?action=modifierCommentaire&amp;id=<?= $commentaireSelectionne['id'] ?>" method="post"> 
                <div>
                    <label for="commentaire">Commentaire à modifier</label><br />
                    <textarea type="text" id="commentaire" name="commentaire"></textarea>
                </div>

                <div>
                    <input type="submit" value="Postez la modification de mon commentaire"/>
                    <a class="btn btn-danger" href="index.php?action=deleteCommentaire&amp;id=<?=$commentaireSupprimme['id'] ?> ">Delete</a>
                </div>

        </form>  

<?php $content = ob_get_clean() ; ?> <!-- contient tout le code généré ci-dessus >dans $content -->

<?php require('template.php'); ?> 


