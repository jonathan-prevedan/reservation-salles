<?php
    $msg = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(empty($_SESSION['username']))
    {
        header('Location: login.php');
    }
    if(isset($_POST['modify']))
    {
        $msg = modify();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ressources/images/icons/logo.png">
    <title><?php echo $login ?> | La cabane à pizza</title>
</head>
<body>
    <nav>
        <div id="user">
            <img src="images/.jpg">
            <?php if(isset($login)){echo "<a style=\"text-decoration: none;\"href=\"profil.php\"><h2>$login</h2></a>";} ?>
        </div>
        <div id="liens">
            <a href="index.php">Accueil</a>
            <a href="reservation.php">Voir Planning</a>
            <a href="commentaire.php">Reserver une salle</a>
            <?php if(isset($login)){echo "<a href=\"index.php?dc\" style=\"color: red;\">Se déconnecter</a>";}else{ echo "<a href=\"login.php\">Inscription/Connexion</a>";} ?>
        </div>
    </nav>
    <main id="main_profil">
        <section>
            <form action="profil.php" method="post">
                <h1>Modifier mes informations</h1>
                <input type="text" name="username" value="<?php echo $login ?>">
                <input type="password" name="password" placeholder="Nouveau mot de passe">
                <input type="submit" name="modify">
                <?php if($msg != ""){ echo "<p style=\"color: green; text-align: center; margin: 0;\">$msg</p>";} ?>
            </form>
        </section>
    </main>
</body>
</html>