<?php
include 'config.php';
try {
    $firstName = $_POST['firstName'].'';

    $lastName = $_POST['lastName'].'';

    $nickname = $_POST['nickname'].'';

    $hobby = $_POST['hobby'].'';

    $age = $_POST['age']+0;

    $result=changeInfo($firstName, $lastName, $nickname, $hobby, $age);
    if($result==='Success!'){
        $_SESSION['log_message']="The info has been saved.";
        header('location:../Profile.php');
    }
    else if($result==='Fail_1')
    {
       
        $_SESSION['log_message']="This account does not exist";
        header('location:../log_in.php');
    }

else if($result==='Fail_2'){
 
    $_SESSION['log_message']="Erroare application.";
    header('location:../log_in.php');
}



}
catch(PDOException $e)
{
    $_SESSION['log_message']= "Eroare! Informatiile nu au fost salvate";
    header('location:../Profile.php');
}
$conn=null;
?>