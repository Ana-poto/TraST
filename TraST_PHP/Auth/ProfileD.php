<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=trast", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $firstName = $_POST['firstName'].'';

    $lastName = $_POST['lastName'].'';

    $nickname = $_POST['nickname'].'';

    $hobby = $_POST['hobby'].'';

    $age = $_POST['age']+0;

    $stmt = $conn->prepare("SELECT username FROM users where username= :username ");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->execute();

    if($stmt->rowCount()===0){
        echo ("Username does not exist.");
        header('location:../log_in.php');

    }
    else{
        // sistem pt null
        $sql="update users set ";
        if ($nickname!=='') {
            if (strcmp( $sql,"update users set ") ==0)
                $sql=$sql.'nickname=:nickname ';
            else
                $sql=$sql.', nickname=:nickname ';
        }
        if ($firstName!==''){
            if (strcmp( $sql,"update users set ") ==0)
                $sql=$sql.'first_name=:firstName ';
            else
                $sql=$sql.', first_name=:firstName ';
        }
        if ($lastName!==''){
            if (strcmp( $sql,"update users set ") ==0)
                $sql=$sql.'last_name=:lastName ';
            else
                $sql=$sql.', last_name=:lastName ';
        }
        if ($hobby!==''){
            if (strcmp( $sql,"update users set ") ==0)
                $sql=$sql.'hobbys=:hobby ';
            else
                $sql=$sql.', hobbys=:hobby ';
        }
        if ($age!==0){
            if (strcmp( $sql,"update users set ") ==0)
                $sql=$sql.'age=:age ';
            else
                $sql=$sql.', age=:age ';
        }
        $sql=$sql."where username=:username";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':username', $_SESSION['username']);
        if ($firstName!=='') {
            $stmt->bindParam(':firstName', $firstName);
        }
        if ($lastName!=='') {
            $stmt->bindParam(':lastName', $lastName);
        }
        if ($nickname!=='') {
            $stmt->bindParam(':nickname', $nickname);
        }
        if ($hobby!=='') {
            $stmt->bindParam(':hobby', $hobby);
        }
        if ($age!==0) {
            $stmt->bindParam(':age', $age);
        }

        $stmt->execute();
        $_SESSION['nickname']= $nickname;
        $_SESSION['first_name']= $firstName;
        $_SESSION['last_name']= $lastName;
        $_SESSION['hobbys']= $hobby;
        $_SESSION['age']= $age;
        $_SESSION['update']= "Success! Informatiile au fost salvate";
        echo ($sql);
        header('location:../Profile.php');
    }


}
catch(PDOException $e)
{
    $_SESSION['update']= "Eroare! Informatiile nu au fost salvate";
    header('location:../Profile.php');
    echo ($e);
}
$conn=null;
?>