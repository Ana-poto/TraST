<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=trast", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $firstName = $_POST['firstName'];

    $lastName = $_POST['lastName'];

    $nickname = $_POST['nickname'];

    $hobby = $_POST['hobby'];

    $age = $_POST['age'];

    $stmt = $conn->prepare("SELECT username FROM users where username= :username ");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->execute();

    if($stmt->rowCount()===0){
        echo ("Username or password are wrong.");

    }
    else{
        $stmt = $conn->prepare("update users  set first_name=:firstName,last_name=:lastName,nickname=:nickname,hobbys=:hobby,age=:age where username=:username");
        $stmt->bindParam(':username',$_SESSION['username']);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':nickname', $nickname);
        $stmt->bindParam(':hobby', $hobby);
        $stmt->bindParam(':age', $age);
        $stmt->execute();
        header('location:../Profile.php');
    }


}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>