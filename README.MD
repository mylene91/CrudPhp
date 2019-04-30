# Instructions Blog MVC

Voici la procédure a respecter pour installer le projet : 

    * Créer une base de données 
    * Dans votre base de données importez le fichier sql.
    * Dans le dossier tools modifier le fichier config.php :
    * La classe config avec les variables statiques suivantes 
             class Config {
            
                public static  $HOST     = 'votrevaleur';
                public static  $DBNAME   = 'votrevaleur';
                public static  $USER     = 'votrevaleur';
                public static  $PASSWORD = 'votrevaleur';
            
            }




MVC :
------------            
MVC est un patron de conception (design pattern en anglais) très répandu pour réaliser des sites web. 
Ce patron de conception est une solution éprouvée et reconnue permettant de séparer l’affichage des informations, 
les actions de l’utilisateur et l’accès aux données.
MVC permet une séparation claire des intentions et optimise la création d’une application web ou d’un site, 
sa maintenance et ses tests automatisés.

MVC signifie Modèle-Vue-Contrôleur : 

- Le M de MVC signifie Modèle. Il s’agit des données et de l’état de votre application web 

- Le V de MVC signifie la Vue et traite de ce qu’on voit à l’écran dans le navigateur web.

- Le C de MVC signifie Contrôleur. Il fait le lien entre la vue et le modèle.
    