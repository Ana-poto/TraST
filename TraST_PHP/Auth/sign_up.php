<?php
include 'config.php';
try {
  
$user = $_POST['username'];
$email = $_POST['e-mail'];
$password = $_POST['pass'];
$register = signUp($user,$email, $password);

        if($register==='Success!'){
            header('location:../log_in.php');
        }
        else if($register==='Fail_1')
        {
           
            $_SESSION['log_message']="This mail is already used";
            header('location:../sign_up.php');
        }
   
    else if($register==='Fail_2'){
     
        $_SESSION['log_message']="This username is already used";
        header('location:../sign_up.php');
    }



}
catch(PDOException $e)
{
    $_SESSION['log_message']="Error: " . $e->getMessage(); // sesion va lua acea valoare
    header('location:../sign_up.php'); 
}
$conn=null;
?>
