<?php 
session_start();
$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$requete = "SELECT login, titre, description, DATE_FORMAT(debut, \"%T\"), debut, DATE_FORMAT(fin, \"%T\"), fin, DATE_FORMAT(debut, \"%W\") FROM reservations LEFT JOIN utilisateurs ON utilisateurs.id = reservations.id_utilisateur";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
?>

<!DOCTYPE html>

<html>

<head>
    <title>Reservation Salles - Planning</title>
    <link rel="stylesheet" type="text/css" href="reservation-salles.css">
</head>
<?php
              include('header.php');
            ?>
<body>
    <main>
        <section id="ctableau">
            <table>
                <thead>
                    <tr>
                        <th class="cjours"></th>
                        <th class="cjours">Lundi</th>
                        <th class="cjours">Mardi</th>
                        <th class="cjours">Mercredi</th>
                        <th class="cjours">Jeudi</th>
                        <th class="cjours">Vendredi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("tableau.php");
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>