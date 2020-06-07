<?php
include 'config.php';

try {

    $password = $_POST['pass'].'';

    $new_pass = $_POST['new_pass'].'';

    $email = $_POST['e-mail'].'';
    $result=changePass($password, $new_pass, $email);

    if($result==='Success!'){
        $_SESSION['log_message']="The password has been changed.";
        header('location:../Profile.php');
    }
    else if($result==='Fail_1')
    {
       
        $_SESSION['log_message']="The password or email is wrong";
        header('location:../Profile.php');
    }
    else if($result==='Fail_2'){
 
        $_SESSION['log_message']="The new password is under 6 characters or the mail is not good";
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