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
    <link rel="stylesheet" href="reservation-salles.css">
    <link rel="icon" href="images/logo.png">
    <title><?php echo $login ?> | La cabane à pizza</title>
</head>
<body>
  
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