<?php
include 'config.php';


try {

    $username = $_SESSION['username'];
    $categorie = $_POST['categorie'] . '';
    $result = A_addProgressToDB($username,  $categorie);
    if($result === "Success!"){
        $_SESSION['progress_message']="The progress has been saved.";
        header('location:../Learn/semne_circulatie.php');
    }
    else if($result === "Fail_1"){
        $_SESSION['progress_message']="Categorie does not exist";
        header('location:../home.php');
    }
    else{
        $_SESSION['progress_message']="The username is not valid.";
        header('location:../Learn/semne_circulatie.php');
    }
}
catch(PDOException $e)
{
    $_SESSION['progress_message']= "Eroare! Progresul  nu a fost salvat";
    header('location:../Learn/semne_circulatie.php');
}



?>