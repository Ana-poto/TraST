<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=trast", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user = $_POST['user'];
    $password = $_POST['pass'];

    $stmt = $conn->prepare("SELECT username,nickname FROM users where username= :username and password = :password");
    $stmt->bindParam(':username',$user);
    $stmt->bindParam(':password',$password);
    $stmt->execute();

    if($stmt->rowCount()===0){
        echo ("Username or password are wrong.");

    }
    else{
        $row=$stmt->fetch();
        $nickname=$row['nickname'];
        $_SESSION['nickname']= $nickname;
        header('location:../home.php');
    }


}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

?>