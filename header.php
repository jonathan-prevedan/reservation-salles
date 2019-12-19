<head>
     <link rel="stylesheet" type="text/css" href="reservation-salles.css">
</head>
<header>
                <div id="title_content">
                    <div id="logo_image">
                        <a href="index.php"><img src="images/logo.png"/></a>
                    </div>
                    <div id="logo_text">
                        <a href="#"><h1>LaCabane</h1></a>
                    </div>
                </div>
                <div id="nav_content">
                    <ul>
                        
                       
                        <li><a data-text="Agenda" href="planning.php">Planning</a></li>
                        <?php 
                        if(!isset($_SESSION['username']))
                        { ?>
                        <li><a data-text="Connexion" href="login.php">Connexion</a></li>
                        <li><a data-text="Inscription" href="register.php">Inscription</a></li>
                        <?php }
                        
                        
                        if(isset($_SESSION['username']))
                        { ?>
                        <li><a data-text="Mon profil" href="profil.php">Profil</a></li>
                        <li><form method="POST" action="deconnexion.php"><input type="submit" name="dc" value="Deconnect"></form></li>
                        <?php } ?>
                    </ul>
                    
                </div>
            </header>