<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=trast", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$user = $_POST['user'];

$email = $_POST['e-mail'];

$password = $_POST['pass'];

$stmt = $conn->prepare("SELECT username FROM users where username= :username ");
$stmt->bindParam(':username',$user);
$stmt->execute();

    if($stmt->rowCount()===0){
        $stmt = $conn->prepare("SELECT email FROM users where email= :email ");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if($stmt->rowCount()===0) {
            $stmt = $conn->prepare("Insert into users (username,password,email,nickname) values(:username,:password,:email,:nick)");
            $stmt->bindParam(':username', $user);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nick', $user);
            $stmt->execute();
            echo("Account created!");


        }else
        {
            echo ("This mail is already used");

        }
    }
    else{
        echo ("This username is already used");

    }


}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>