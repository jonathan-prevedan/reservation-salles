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
<?php
              include('header.php');
            ?>
<body id="profil_body">
    <main id="main_profil">
    <img src="images/piz.png" alt="logo du site">
        <h3>Modifications profil</h3>
            <form action="profil.php" method="post">
               
                <input type="text" name="username" value="<?php echo $login ?>" required>
                <input type="password" name="password" placeholder="Nouveau mot de passe" required>
                <input type="submit" name="modify">
                <?php if($msg != ""){ echo "<p style=\"color: black; text-align: center; margin: 0;\">$msg</p>";} ?>
                <?php if(isset($login)){echo "<a href=\"index.php?disc\" style=\"color: red;\">Se déconnecter</a>";}?>
            </form>
        </section>
    </main>
</body>
</html>