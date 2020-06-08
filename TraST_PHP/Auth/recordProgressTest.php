<?php
include 'config.php';


try {

    $username = $_SESSION['username'];
    $testNo = $_POST['testNo'];
    $quizScore= $_POST['quizScore']+0;


    $result = addProgressTests($username, $testNo, $quizScore);
    if($result === "Success!"){
        $_SESSION['progress_message']="The has been saved.";
        header('location:../test.php');
    }
    else if($result === "Fail_1"){
        $_SESSION['progress_message']="The username is not valid.";
        header('location:../home.php');
    }
    else{
        $_SESSION['progress_message']="Section does not exist";
        header('location:../test.php');
    }
}
catch(PDOException $e)
{
    $_SESSION['progress_message']= "Eroare! Progresul  nu a fost salvat";
    header('location:../test.php');
}



?>