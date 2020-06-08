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

                $stmt = $conn->prepare("Insert into sectiuni_reguli (username) values(:username)");
                $stmt->bindParam(':username', $user);
                $stmt->execute();
                $stmt = $conn->prepare("Insert into categorii_semne (username) values(:username)");
                $stmt->bindParam(':username', $user);
                $stmt->execute();
                $stmt = $conn->prepare("Insert into teste (username) values(:username)");
                $stmt->bindParam(':username', $user);
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

function A_addProgressToDB($username,$categorie){
    $conn=connDB();
    switch ($categorie) {
        case "Indicatoare de avertizare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de avertizare`='done' where username=:username");
            break;
        case "Indicatoare de informare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de informare`='done' where username=:username");
            break;
        case "Indicatoare de interzicere sau restrictie":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de interzicere sau restrictie`='done' where username=:username");
            break;
        case "Panouri aditionale":
            $stmt = $conn->prepare("update categorii_semne set `Panouri aditionale`='done' where username=:username");
            break;
        case "Indicatoare de informare turistica":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de informare turistica`='done' where username=:username");
            break;
        case "Indicatoare de obligare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de obligare`='done' where username=:username");
            break;
        case "Indicatoare de orientare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de orientare`='done' where username=:username");
            break;
        case "Indicatoare de prioritate":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de prioritate`='done' where username=:username");
            break;
        case "Semnale luminoase":
            $stmt = $conn->prepare("update categorii_semne set `Semnale luminoase`='done' where username=:username");
            break;
        case "Indicatoare instalate la trecerea cu calea ferata":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare instalate la trecerea cu calea ferata`='done' where username=:username");
            break;
        case "Indicatoare kilometrice":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare kilometrice`='done' where username=:username");
            break;
        case "Indicatoare rutiere temporare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare rutiere temporare`='done' where username=:username");
            break;
        case "Mijloace auxiliare de semnalizare a lucrărilor":
            $stmt = $conn->prepare("update categorii_semne set `Mijloace auxiliare de semnalizare a lucrărilor`='done' where username=:username");
            break;
        case "Marcaje longitudinale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje longitudinale`='done' where username=:username");
            break;
        case "Marcaje transversale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje transversale`='done' where username=:username");
            break;
        case "Marcaje diverse":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje diverse`='done' where username=:username");
            break;
        case "Marcaje laterale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje laterale`='done' where username=:username");
            break;
        case "Semnalele polițistului rutier":
            $stmt = $conn->prepare("update categorii_semne set `Semnalele polițistului rutier`='done' where username=:username");
            break;
        default:
            return "Fail_1";
    }

    if ($username!=='') {
        $stmt->bindParam(':username', $username);
    }

    $stmt->execute();
    if($stmt->rowCount()===0){
        return "Fail_2";
    }
    else
        return "Success!";
}

function B_addProgressToDB($username,$sectiune){
    $conn=connDB();
    switch ($sectiune) {
        case "s1":
            $stmt = $conn->prepare("update sectiuni_reguli set s1='done' where username=:username");
            break;
        case "s2":
            $stmt = $conn->prepare("update sectiuni_reguli set s2=='done' where username=:username");
            break;
        case "s3":
            $stmt = $conn->prepare("update sectiuni_reguli set s3=='done' where username=:username");
            break;
        case "s4":
            $stmt = $conn->prepare("update sectiuni_reguli set s4='done' where username=:username");
            break;
        case "s5":
            $stmt = $conn->prepare("update sectiuni_reguli set s5='done' where username=:username");
            break;
        case "s6":
            $stmt = $conn->prepare("update sectiuni_reguli set s6='done' where username=:username");
            break;
        default:
            return "Fail_1";
    }

    if ($username!=='') {
        $stmt->bindParam(':username', $username);
    }

    $stmt->execute();
    if($stmt->rowCount()===0){
        return "Fail_2";
    }
    else
      return "Success!";
}

function addProgressTests($username,$test,$score){
    $conn=connDB();
    switch ($test) {
        case "t1":
            $stmt = $conn->prepare("update teste set t1=:score where username=:username");
            break;
        case "t2":
            $stmt = $conn->prepare("update teste set t2=:score where username=:username");
            break;
        case "t3":
            $stmt = $conn->prepare("update teste set t3=:score where username=:username");
            break;
        case "t4":
            $stmt = $conn->prepare("update teste set t4=:score where username=:username");
            break;
        case "t5":
            $stmt = $conn->prepare("update teste set t5=:score where username=:username");
            break;
        case "t6":
            $stmt = $conn->prepare("update teste set t6=:score where username=:username");
            break;
        case "t7":
            $stmt = $conn->prepare("update teste set t7=:score where username=:username");
            break;
        case "t8":
            $stmt = $conn->prepare("update teste set t8=:score where username=:username");
            break;
        case "t9":
            $stmt = $conn->prepare("update teste set t9=:score where username=:username");
            break;
        case "t10":
            $stmt = $conn->prepare("update teste set t10=:score where username=:username");
            break;
        case "t_A":
            $stmt = $conn->prepare("update teste set t_A=:score where username=:username");
            break;
        case "t_B":
            $stmt = $conn->prepare("update teste set t_B=:score where username=:username");
            break;
        default:
            return "Fail_1";
    }

    if ($username!=='' && $score!=0) {
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':score', $score);
    }

    $stmt->execute();
    if($stmt->rowCount()===0){
        return "Fail_2";
    }
    else
        return "Success!";
}


?>
