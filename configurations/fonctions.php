<?php
    function register()
    {
        $msg = "";
        $db = $_SESSION['db'];
        if($_POST['password'] == $_POST['cpassword'])
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = mysqli_real_escape_string($db, $username);
            $password = mysqli_real_escape_string($db, $password);
            $checkuser = mysqli_query($db, "SELECT login FROM utilisateurs WHERE login='$username'");
            $result = mysqli_num_rows($checkuser);
            if($result == 0)
            {
                $password = password_hash($password, PASSWORD_BCRYPT);
                mysqli_query($db, "INSERT INTO utilisateurs (login, password) VALUES ('$username', '$password')");
                header('Location: login.php');
            }
            else
            {
                $msg = "Nom d'utilisateur déjà prit";
            }
            
        }
        else
        {
            $msg = "Les mots de passe ne correspondent pas";
        }
        return($msg);
    }

    function login()
    {
        $msg = "";
        $db = $_SESSION['db'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($db, "SELECT login FROM utilisateurs WHERE login='$username'");
        $checkuser = mysqli_num_rows($query);
        if($checkuser == 1)
        {
            $query = mysqli_query($db, "SELECT password FROM utilisateurs WHERE login='$username'");
            $result = mysqli_fetch_all($query);
            $cryptedpass = $result[0][0];
            $checkpass = password_verify($password, $cryptedpass);
            if($checkpass == true)
            {
                $query = mysqli_query($db, "SELECT id, login FROM utilisateurs WHERE login='$username'");
                $get_infos = mysqli_fetch_all($query);
                $_SESSION['id'] = $get_infos[0][0];
                $_SESSION['username'] = $get_infos[0][1];
                header('Location: index.php');
            }
            else
            {
                $msg = "Nom d'utilisateur ou mot de passe incorrecte";
            }
        }
        else
        {
            $msg = "Nom d'utilisateur ou mot de passe incorrecte";
        }
        return($msg);
    }

    function modify()
    {
        $db = $_SESSION['db'];
        $id = $_SESSION['id'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        mysqli_query($db, "UPDATE utilisateurs SET login='$username', password='$password' WHERE id='$id'");
        $msg = "Vos informations ont bien été changées";
        return($msg);
    }
    
    function resa()
    {
        $db = $_SESSION['db'];
        $id = $_SESSION['id'];
        $titre = $_POST['titre'];
        $dsc = $_POST['description'];
        $hdd = $_POST['debut'];
        $hdf = $_POST['fin'];
        
        mysqli_query($db, "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre','$dsc','$hdd','$hdf','$id')");
        $msg = "Votre réservation a bien été prise en compte.";
        return($msg);
    }




?>