<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
?>

<!DOCTYPE html>
    <html lang="fr" id="accueil_html">
        <head>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="reservation-salles.css"/>
            <link rel="icon" href="images/logo.png"/>
            <title>Accueil | La Cabane à Pizza</title>
        </head>
        <body id="accueil_body">
            <?php
              include('header.php');
            ?>
            <main id="accueil_main">
                <section id="accueil_title">
                    <article id="accueil_message">
                        <div id="message_title">
                            <h1>Bienvenue à la Cabane</h1>
                        </div>
                        <div id="message_leaves">
                            <img src="images/piz.png">
                            <img src="images/pizz.png">
                        </div>
                        <div id="message_button">
                            <a href="#accueil_presentation"><button>Laissez-nous nous présenter</button></a>
                        </div>
                    </article>
                </section>
                <section id="accueil_presentation">
                    <article id="presentation_message">
                        <div class="content_presentation">
                            <h1>A propos</h1>
                            <div class="article_p">
                                <p>La Cabane à Pizza à Marseille 12 propose la livraison à domicile et la restauration sur place. Dans cette pizzéria, les Marseillais se délectent de pizzas cuites au feu de bois. Dans l’offre de pizzas dites classiques, vous trouverez des compositions traditionnelles : anchois, fromage, chorizo, lardons-fromage… Ce sont des recettes simples mais ô combien délicieuses. L’enseigne propose aussi des spécialités à la sauce tomate. Cette fois-ci, les pizzas reçoivent des garnitures un peu plus complexes. C’est dans cette catégorie que le pizzaiolo a inséré la pizza végétarienne. Il y a enfin les spécialités à la crème ainsi que les chaussons.  
                                   Livraison de Pizzas de 18h à 22h.
                                   Profitez de -10% de réduction sur votre commande pour toute livraison avant 18h50 ! Bonne visite :).
                                </p>
                            </div>
                        </div>
                </section>
                    </article> 
            </main>         
        </body>                  
</html>