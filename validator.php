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

    $stmt = $conn->prepare("SELECT username,nickname,first_name,last_name,hobbys,age FROM users where username= :username and password = :password");
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
        $username=$row['username'];
        $_SESSION['username']= $username;
        $first_name=$row['first_name'];
        $_SESSION['first_name']= $first_name;
        $last_name=$row['last_name'];
        $_SESSION['last_name']= $last_name;
        $hobbys=$row['hobbys'];
        $_SESSION['hobbys']= $hobbys;
        $age=$row['age'];
        $_SESSION['age']= $age;
        header('location:../home.php');
    }


}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

?>