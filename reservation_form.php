<?php 


$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
	$db = $_SESSION['db'];
	var_dump($db);
	

	if(isset($_POST['go']))
	{
		$msg = resa();
		echo'coucou';
	}

	else
	{
		echo'sa marche pas.';
	}
?>

<form action="" method="POST">
<input type="text" name="titre">
<input type="text" name="description">
<input type="datetime-local" name="debut">
<input type="datetime-local" name="fin">
<input type="submit" name="go" value="Réservez !">
</form>