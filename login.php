<?php
$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(isset($_POST['connect']))
    {
        $error = login();
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
    <title>Connexion | La cabane à pizza</title>
</head>
<?php
              include('header.php');
            ?>
<body id="register_body">
    <main id="register_content">
    <img src="images/logo.png" alt="logo du site">
        <form action="login.php" method="post">
            <input minlength="3" type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="submit" name="connect" value="Se connecter">
            <a href="register.php">S'inscrire</a>
            <?php if($error != ""){echo "<p>$error</p>";}?>
        </form>
    </main>
</body>
</html>