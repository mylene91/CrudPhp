<?php $title = 'Mon blog';  ?>

<?php ob_start(); ?> <!-- mise en mémoire de la sortie HTML -->
    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog :</p>
 
<?php 
    while ($donnees = $billets->fetch())
    {
    ?>
        <div class="news">
            <h3>
                <?= htmlspecialchars($donnees['titre']); ?><br/>
                Auteur :
                <?= htmlspecialchars($donnees['auteur']); ?><br />
                <em>Le <?= $donnees['date_creation_fr']; ?></em>
            </h3>
                
            <p>
                <?= nl2br(htmlspecialchars($donnees['contenu'])); ?>
                <br />
                <em><a href="index.php?action=billet&amp;id=<?= $donnees['id'] ?>">Commentaires</a></em>
            </p>
        </div>
<?php
    } // Fin de la boucle des billets
    $billets->closeCursor();
    ?>
<?php $content = ob_get_clean() ; ?> <!-- contient tout le code généré ci-dessus dans $content -->

<?php require('template.php'); ?> 
    