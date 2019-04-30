<?php $title = htmlspecialchars($billet['titre']); ?>

<?php ob_start(); ?>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($billet['titre']) ?><br />
               Auteur :  <?= htmlspecialchars($billet['auteur']) ?>

                <em>- Le <?= $billet['date_creation_fr'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($billet['contenu'])) ?>
            </p>

        </div>

        <h2>Commentaires liés au billet # <?= $billet['id']?></h2>

        <?php
        while ($commentaire = $commentaires->fetch())
        {
        ?>
        <div class="news"> 
            <p><strong><?= htmlspecialchars($commentaire['auteur']) ?></strong> le <?= $commentaire['date_commentaire_fr'] ?><a href="index.php?action=unCommentaire&amp;id=<?= $commentaire['id'] ?>"> (modifier)</a><br/>
            <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?></p>
         </div>

        <?php
        }
        ?>
        <h2>Laissez nous votre commentaire </h2>
        <form action="index.php?action=ajouterCommentaire&amp;id=<?= $billet['id'] ?>" method="post">
                <div>
                    <label for="auteur">Auteur</label><br />
                    <input type="text" id="auteur" name="auteur" />
                </div>

                <div>
                    <label for="commentaire">Commentaire</label><br />
                    <textarea type="text" id="commentaire" name="commentaire"></textarea>
                </div>

                <div>
                    <input type="submit" value="Postez votre commentaire"/>
                </div>
            </form>  
               

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
