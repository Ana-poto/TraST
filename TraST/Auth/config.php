<?php
session_start();
function connDB(){
    $servername = "localhost";
    $db_username = "root";
    $db_password = "1234";

    $conn = new PDO("mysql:host=$servername;dbname=trast", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(!$conn){
      throw new Exception("Error DB CONECTION", 1);
    }
    else return $conn;
}

function logIn($user, $pass){
    $conn=connDB();

    $stmt = $conn->prepare("SELECT username,nickname,first_name,last_name,hobbys,age FROM users where username= :username and password = :password");
    $stmt->bindParam(':username',$user);
    $stmt->bindParam(':password',$pass);
    $stmt->execute();

    if($stmt->rowCount()===0){
        return "Fail";
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
        return "Succes";
    } 
    throw new Exception("Error STMT", 1);
    
}

function signUp($user,$email, $password){
    $conn=connDB();

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
            
                return 'Success!';
                
            }
            else{
            return 'Fail_1';

        }
    }
    else{
        return 'Fail_2';

    }
    return'';
    
}

function changeInfo($firstName, $lastName, $nickname, $hobby, $age){
    $conn=connDB();

    $stmt = $conn->prepare("SELECT username FROM users where username= :username ");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->execute();

    if($stmt->rowCount()===0){
        return "Fail_1";
    }
    else{
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
        return "Success!";
        
    }
    return "Fail_2";

}


function changeMail($password, $new_email, $email){
    $conn=connDB();
    $stmt = $conn->prepare("SELECT username FROM users where username= :username  and email=:email and password=:pass");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->bindParam(':pass',$password);
    $stmt->bindParam(':email',$email);
    $stmt->execute();

    if($stmt->rowCount()===0){
        return "Fail_1";

    }
    else{ 
        if (strlen($new_email) <9){ 
        
            return "Fail_2";
        }
        else {
            $stmt = $conn->prepare("update users  set email=:email where username=:username");
            $stmt->bindParam(':username', $_SESSION['username']);
            $stmt->bindParam(':email', $new_email);
            $stmt->execute();
            return "Success!";
        }
    }
    return "";

}


function changePass($password, $new_pass, $email){
    $conn=connDB();
    $stmt = $conn->prepare("SELECT username FROM users where username= :username  and email=:email and password=:pass");
    $stmt->bindParam(':username',$_SESSION['username']);
    $stmt->bindParam(':pass',$password);
    $stmt->bindParam(':email',$email);
    $stmt->execute();

    if($stmt->rowCount()===0){
        return "Fail_1";

    }
    else{
        if (strlen($new_pass) <=6 || $password==='' || $email===''){
            return "Fail_2";
        }
        else {
            $stmt = $conn->prepare("update users  set password=:pass where username=:username");
            $stmt->bindParam(':username', $_SESSION['username']);
            $stmt->bindParam(':pass', $new_pass);
            $stmt->execute();
            return "Success!";
        }
    }
    return "";

}


?>
