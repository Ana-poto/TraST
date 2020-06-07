<?php
include 'config.php';



try {


    $password = $_POST['pass'].'';

    $new_email = $_POST['new_email'].'';

    $email = $_POST['e-mail'].'';

    
    $result=changeMail($password, $new_email, $email);
    if($result==='Success!'){
        $_SESSION['log_message']="The email has been changed.";
        header('location:../Profile.php');
    }
    else if($result==='Fail_1')
    {
       
        $_SESSION['log_message']="The password is wrong";
        header('location:../Profile.php');
    }

else if($result==='Fail_2'){
 
    $_SESSION['log_message']="The new mail must be at least 10 characters long";
    header('location:../Profile.php');
}



}
catch(PDOException $e)
{
    $_SESSION['log_message']= "Eroare! Informatiile nu au fost salvate";
    header('location:../Profile.php');
}
$conn=null;
?>