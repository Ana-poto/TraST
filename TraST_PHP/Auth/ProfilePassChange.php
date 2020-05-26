<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=trast", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $password = $_POST['pass'].'';

    $new_pass = $_POST['new_pass'].'';

    $email = $_POST['e-mail'].'';

    $stmt = $conn->prepare("SELECT username FROM users where username= :username  and email=:email and password=:pass");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->bindParam(':pass',$password);
    $stmt->bindParam(':email',$email);
    $stmt->execute();

    if($stmt->rowCount()===0){
        echo ("Email or pass do not match.");

    }
    else{
        if (strlen($new_pass) <16 || $password==='' || $email===''){
            echo("The new password is too small or the password/mail do not match");
        }
        else {
            $stmt = $conn->prepare("update users  set password=:pass where username=:username");
            $stmt->bindParam(':username', $_SESSION['username']);
            $stmt->bindParam(':pass', $new_pass);
            $stmt->execute();
            header('location:../Profile.php');
        }
    }


}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>