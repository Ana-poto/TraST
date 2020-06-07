<?php
include 'config.php';

try {
    $user = $_POST['user'];
    $password = $_POST['pass'];

   if(logIn($user,$password)==="Succes"){
        header('location:../home.php');
    }
    else{
        $_SESSION['log_message']="Username or password are wrong.";
        header('location:../log_in.php');
    }


}
catch(PDOException $e)
{
    $_SESSION['log_message']="Error: " . $e->getMessage();
        header('location:../log_in.php');
}
$conn=null;
?>