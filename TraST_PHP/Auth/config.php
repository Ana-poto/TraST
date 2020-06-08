<?php
session_start();
function connDB(){
    $servername = "localhost";
    $db_username = "trast_admin";
    $db_password = "Admin_TraST";

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
        $stmt = $conn->prepare("SELECT * FROM categorii_semne where username= :username");
        $stmt->bindParam(':username',$user);
        $stmt->execute();

        if($stmt->rowCount()===0){
            return "Fail";
        }
        else{
            $row=$stmt->fetch();
            $_SESSION['Indicatoare de avertizare']= $row['Indicatoare de avertizare'].' ';
            $_SESSION['Indicatoare de informare']= $row['Indicatoare de informare'].' ';
            $_SESSION['Indicatoare de interzicere sau restrictie']= $row['Indicatoare de interzicere sau restrictie'].'';
            $_SESSION['Panouri aditionale']= $row['Panouri aditionale'].'';
            $_SESSION['Indicatoare de informare turistica']= $row['Indicatoare de informare turistica'].'';
            $_SESSION['Indicatoare de obligare']= $row['Indicatoare de obligare'].'';
            $_SESSION['Indicatoare de orientare']= $row['Indicatoare de orientare'].'';
            $_SESSION['Indicatoare de prioritate']= $row['Indicatoare de prioritate'].'';
            $_SESSION['Semnale luminoase']= $row['Semnale luminoase'].'';
            $_SESSION['Indicatoare instalate la trecerea cu calea ferata']= $row['Indicatoare instalate la trecerea cu calea ferata'].'';
            $_SESSION['Indicatoare kilometrice']= $row['Indicatoare kilometrice'].'';
            $_SESSION['Indicatoare rutiere temporare']= $row['Indicatoare rutiere temporare'].'';
            $_SESSION['Mijloace auxiliare de semnalizare a lucrărilor']= $row['Mijloace auxiliare de semnalizare a lucrărilor'].'';
            $_SESSION['Marcaje longitudinale']= $row['Marcaje longitudinale'].'';
            $_SESSION['Marcaje transversale']= $row['Marcaje transversale'].'';
            $_SESSION['Marcaje diverse']= $row['Marcaje diverse'].'';
            $_SESSION['Marcaje laterale']= $row['Marcaje laterale'].'';
            $_SESSION['Semnalele polițistului rutier']= $row['Semnalele polițistului rutier'].'';

        }

        $stmt = $conn->prepare("SELECT * FROM sectiuni_reguli where username= :username");
        $stmt->bindParam(':username',$user);
        $stmt->execute();

        if($stmt->rowCount()===0){
            return "Fail";
        }
        else{
            $row=$stmt->fetch();
            $_SESSION['s1']= $row['s1'].'';
            $_SESSION['s2']= $row['s2'].'';
            $_SESSION['s3']= $row['s3'].'';
            $_SESSION['s4']= $row['s4'].'';
            $_SESSION['s5']= $row['s5'].'';
            $_SESSION['s6']= $row['s6'].'';

        }

        $stmt = $conn->prepare("SELECT * FROM teste where username= :username");
        $stmt->bindParam(':username',$user);
        $stmt->execute();

        if($stmt->rowCount()===0){
            return "Fail";
        }
        else{
            $row=$stmt->fetch();
            $_SESSION['t1']= $row['t1'].'';
            $_SESSION['t2']= $row['t2'].'';
            $_SESSION['t3']= $row['t3'].'';
            $_SESSION['t4']= $row['t4'].'';
            $_SESSION['t5']= $row['t5'].'';
            $_SESSION['t6']= $row['t6'].'';
            $_SESSION['t7']= $row['t7'].'';
            $_SESSION['t8']= $row['t8'].'';
            $_SESSION['t9']= $row['t9'].'';
            $_SESSION['t10']= $row['t10'].'';
            $_SESSION['t_A']= $row['t_A'].'';
            $_SESSION['t_B']= $row['t_B'].'';

        }
        checkRankings();

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
                $stmt = $conn->prepare("Insert into teste (username,Nickname,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t_A,t_B,categorii_parcurse,total) values(:username,:nickname,0,0,0,0,0,0,0,0,0,0,0,0,0,0)");
                $stmt->bindParam(':username', $user);
                $stmt->bindParam(':nickname', $user);
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

function checkRankings(){
    $conn=connDB();
    $stmt = $conn->prepare("select * from teste order by total desc");
    $stmt->execute();

    if($stmt->rowCount()===0){
        return "Fail";
    }
    else{
        for ($i=1;$i<6;$i++) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['#' . $i] = $row;
        }
        return "Success!";
    }
}
function calculateTotal($user){
    $conn=connDB();
    $stmt = $conn->prepare("SELECT * FROM teste where username= :username");
    $stmt->bindParam(':username',$user);
    $stmt->execute();
    $row=$stmt->fetch();
    $_SESSION['calcul'] = $row;
    $total= ($_SESSION['calcul']['t1']+ $_SESSION['calcul']['t2']+$_SESSION['calcul']['t3']+$_SESSION['calcul']['t4']+$_SESSION['calcul']['t5']+$_SESSION['calcul']['t6']+$_SESSION['calcul']['t7']+$_SESSION['calcul']['t8']+$_SESSION['calcul']['t9']+$_SESSION['calcul']['t10']+$_SESSION['calcul']['t_A']+$_SESSION['calcul']['t_B']+$_SESSION['calcul']['categorii_parcurse'])/13;
    $stmt = $conn->prepare("update teste set total=:total where username= :username");
    $stmt->bindParam(':username',$user);
    $stmt->bindParam(':total',$total);
    $stmt->execute();

}


function A_addProgressToDB($username,$categorie){
    $conn=connDB();
    switch ($categorie) {
        case "Indicatoare de avertizare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de avertizare`='done' where username=:username");
            $_SESSION['Indicatoare de avertizare']= 'done';
            break;
        case "Indicatoare de informare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de informare`='done' where username=:username");
            $_SESSION['Indicatoare de informare']= 'done';
            break;
        case "Indicatoare de interzicere sau restrictie":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de interzicere sau restrictie`='done' where username=:username");
            $_SESSION['Indicatoare de interzicere sau restrictie']= 'done';
            break;
        case "Panouri aditionale":
            $stmt = $conn->prepare("update categorii_semne set `Panouri aditionale`='done' where username=:username");
            $_SESSION['Panouri aditionale']= 'done';
            break;
        case "Indicatoare de informare turistica":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de informare turistica`='done' where username=:username");
            $_SESSION['Indicatoare de informare turistica']= 'done';
            break;
        case "Indicatoare de obligare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de obligare`='done' where username=:username");
            $_SESSION['Indicatoare de obligare']= 'done';
            break;
        case "Indicatoare de orientare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de orientare`='done' where username=:username");
            $_SESSION['Indicatoare de orientare']= 'done';
            break;
        case "Indicatoare de prioritate":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare de prioritate`='done' where username=:username");
            $_SESSION['Indicatoare de prioritate']= 'done';
            break;
        case "Semnale luminoase":
            $stmt = $conn->prepare("update categorii_semne set `Semnale luminoase`='done' where username=:username");
            $_SESSION['Semnale luminoase']= 'done';
            break;
        case "Indicatoare instalate la trecerea cu calea ferata":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare instalate la trecerea cu calea ferata`='done' where username=:username");
            $_SESSION['Indicatoare instalate la trecerea cu calea ferata']= 'done';
            break;
        case "Indicatoare kilometrice":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare kilometrice`='done' where username=:username");
            $_SESSION['Indicatoare kilometrice']= 'done';
            break;
        case "Indicatoare rutiere temporare":
            $stmt = $conn->prepare("update categorii_semne set `Indicatoare rutiere temporare`='done' where username=:username");
            $_SESSION['Indicatoare rutiere temporare']= 'done';
            break;
        case "Mijloace auxiliare de semnalizare a lucrărilor":
            $stmt = $conn->prepare("update categorii_semne set `Mijloace auxiliare de semnalizare a lucrărilor`='done' where username=:username");
            $_SESSION['Mijloace auxiliare de semnalizare a lucrărilor']= 'done';
            break;
        case "Marcaje longitudinale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje longitudinale`='done' where username=:username");
            $_SESSION['Marcaje longitudinale']= 'done';
            break;
        case "Marcaje transversale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje transversale`='done' where username=:username");
            $_SESSION['Marcaje transversale']= 'done';
            break;
        case "Marcaje diverse":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje diverse`='done' where username=:username");
            $_SESSION['Marcaje diverse']= 'done';
            break;
        case "Marcaje laterale":
            $stmt = $conn->prepare("update categorii_semne set `Marcaje laterale`='done' where username=:username");
            $_SESSION['Marcaje laterale']= 'done';
            break;
        case "Semnalele polițistului rutier":
            $stmt = $conn->prepare("update categorii_semne set `Semnalele polițistului rutier`='done' where username=:username");
            $_SESSION['Semnalele polițistului rutier']= 'done';
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
    else {
        $sql= $conn->prepare("select * from categorii_semne where username=:username");
        $sql->bindParam(':username', $username);
        $sql->execute();
        $row = $sql->fetch();
        $points=0;
        if($row['Indicatoare de avertizare']==='done')
            $points++;
        if($row['Indicatoare de informare']==='done')
            $points++;
        if($row['Indicatoare de interzicere sau restrictie']==='done')
            $points++;
        if($row['Panouri aditionale']==='done')
            $points++;
        if($row['Indicatoare de informare turistica']==='done')
            $points++;
        if($row['Indicatoare de obligare']==='done')
            $points++;
        if($row['Indicatoare de orientare']==='done')
            $points++;
        if($row['Indicatoare de prioritate']==='done')
            $points++;
        if($row['Semnale luminoase']==='done')
            $points++;
        if($row['Indicatoare instalate la trecerea cu calea ferata']==='done')
            $points++;
        if($row['Indicatoare kilometrice']==='done')
            $points++;
        if($row['Indicatoare rutiere temporare']==='done')
            $points++;
        if($row['Mijloace auxiliare de semnalizare a lucrărilor']==='done')
            $points++;
        if($row['Marcaje longitudinale']==='done')
            $points++;
        if($row['Marcaje transversale']==='done')
            $points++;
        if($row['Marcaje diverse']==='done')
            $points++;
        if($row['Marcaje laterale']==='done')
            $points++;
        if($row['Semnalele polițistului rutier']==='done')
            $points++;
        $stmt2=$conn->prepare("update teste set categorii_parcurse=:points where username=:username");
        $stmt2->bindParam(':username', $username);
        $stmt2->bindParam(':points', $points);
        $stmt2->execute();
        calculateTotal($username);
        checkRankings();
        return "Success!";
    }
}

function B_addProgressToDB($username,$sectiune){
    $conn=connDB();
    switch ($sectiune) {
        case "s1":
            $stmt = $conn->prepare("update sectiuni_reguli set s1='done' where username=:username");
            $_SESSION['s1']= 'done';
            break;
        case "s2":
            $stmt = $conn->prepare("update sectiuni_reguli set s2='done' where username=:username");
            $_SESSION['s2']= 'done';
            break;
        case "s3":
            $stmt = $conn->prepare("update sectiuni_reguli set s3='done' where username=:username");
            $_SESSION['s3']= 'done';
            break;
        case "s4":
            $stmt = $conn->prepare("update sectiuni_reguli set s4='done' where username=:username");
            $_SESSION['s4']= 'done';
            break;
        case "s5":
            $stmt = $conn->prepare("update sectiuni_reguli set s5='done' where username=:username");
            $_SESSION['s5']= 'done';
            break;
        case "s6":
            $stmt = $conn->prepare("update sectiuni_reguli set s6='done' where username=:username");
            $_SESSION['s6']= 'done';
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
    {
        calculateTotal($username);
        checkRankings();
        return "Success!";
    }
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
    {
        calculateTotal($username);
        checkRankings();
        return "Success!";
    }
}


?>
