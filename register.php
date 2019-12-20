<?php
$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(isset($_POST['regist']))
    {

        $error = register();
    }
    if(isset($login))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation-salles.css">
    <link rel="icon" href="images/logo.png">
    <title>Inscription | La cabane à pizza</title>
</head>
<body id="register_body">
            <?php
              include('header.php');
            ?>
    <main id="register_content">
    <img src="images/piz.png" alt="logo du site">
        <form action="register.php" method="post">
            <input minlength="3" type="text" name="username" placeholder="Nom d'utilisateur" autocomplete="off" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="password" name="cpassword" placeholder="Confirmer" required>
            <input type="submit" name="regist" value="S'inscrire">
            <a href="login.php">Se connecter</a>
            <?php if($error != ""){echo "<p>$error</p>";}?>
        </form>
    </main>
</body>
</html>