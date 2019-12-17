<?php
session_start();
    $_SESSION['db'] = mysqli_connect('localhost', 'root', '', 'reservationsalles');
    if(isset($_SESSION['username']))
    {
        $login = $_SESSION['username'];
    }
?>