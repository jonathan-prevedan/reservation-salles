<?php 


$error = "";
    include('configurations/config.php');
    include('configurations/fonctions.php');
	$db = $_SESSION['db'];
	var_dump($db);
	if(isset($_SESSION('username')))
	{
	if(isset($_POST['go']))
	{
		$hdd = $_POST['debut'];
		$query="SELECT *FROM reservations WHERE debut='$hdd'";
        $result= mysqli_query($db, $query);
        $resultat=mysqli_num_rows($result);
        
        $heure1=SUBSTR($_POST['debut'], 11, 2);
	    $heure2=SUBSTR($_POST['fin'], 11, 2);
	    $difference= $heure2 - $heure1;
        
        $min="10";
        $max="23";
        
        $debut1= SUBSTR($_POST['debut'], 8, 2);
	    $fin1 = SUBSTR($_POST['fin'], 8, 2);
	    $difference2=$fin1-$debut1;
	

	if($resultat >0)
	{
		$error ="Crénaux déjà réservé."
	?>
		<p class="eror">
			<?php echo $error; ?>
		</p>
	<?php 	
	}
	if($difference != 1)
	{
		$error = "Crénaux de 1 heure seulement ! "
	?>
		<p class="eror">
			<?php echo $error; ?>
		</p>
	<?php
	}
	?>

	<?php
	if($difference2 != 0)
	{
	?>
		<p class="eror">
			<?php
			echo "*Date début et fin  différente !";
			?>
		</p>
	<?php	
	}
	if($min > $heure1)
	{
	?>
		<p class="eror">
			<?php
			echo "*Heure minium de 10h";
			?>
		</p>
	<?php		
	}
	if($max < $heure2)
	{
		?>
		<p class="eror">
			<?php
			echo "*Heure maximum de 23h";
			?>
		</p>
	<?php		
	}	
	$msg = resa();
	echo $msg;
}
}

else
{
	header('Location: login.php');
}
	?>

<form action="" method="POST">
<label>Titre :</label>
		<input type="text" name="titre">
<label>Description :</label>
	<input type="text" name="description">
<label>Date de début :</label>
		<input type="datetime-local" name="debut">
<label>Date de fin :</label>
	<input type="datetime-local" name="fin">
<input type="submit" name="go" value="Réservez !">
</form>