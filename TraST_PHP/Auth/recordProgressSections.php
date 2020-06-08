<?php
include 'config.php';


    try {

        $username = $_SESSION['username'];
        $sectiune = $_POST['sectiune'] . '';
        $result = B_addProgressToDB($username, $sectiune);
        if($result === "Success!"){
            $_SESSION['progress_message']="The has been saved.";
            header('location:../Learn/reguli_de_circulatie.php');
        }
        else if($result === "Fail_1"){
            $_SESSION['progress_message']="The username is not valid.";
            header('location:../home.php');
        }
        else{
            $_SESSION['progress_message']="Section does not exist";
            header('location:../Learn/reguli_de_circulatie.php');
        }
    }
    catch(PDOException $e)
    {
        $_SESSION['progress_message']= "Eroare! Progresul  nu a fost salvat";
        header('location:../Learn/reguli_de_circulatie.php');
    }



?>