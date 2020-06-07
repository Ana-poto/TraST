<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>TraST</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TraST, invata rutiera de acasa" />
    <meta name="keywords" content="TraST, semne de circulatie, teste auto" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="P.C.N" />
    <meta name="owner"  content="P.C.N" />
    <link rel="icon" href="../../../pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../CSS/web.css" />
    <link rel="stylesheet" href="../../../CSS/learn-categorii.css"/>
</head>


<body >

<!--NAVBAR-->
<div id="nav-background">

    <ul class="Left" >
        <li class="Logo">
            <a class="NavMain" data-ui-name="home" href="../../../home.php">
                <img class="home" alt="Logo" src="../../../pics/logo.png">
            </a>
        </li>
    </ul>
    <ul class="Center" >
        <li class="Main">
            <a class="NavMain" data-ui-name="learn" >
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
                <a href="../../../Learn/reguli_de_circulatie.php">Reguli de circulatie</a>
                <a href="../../../Learn/semne_circulatie.php">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">
            <a class="NavMain" data-ui-name="teste" href="../../../test.php">
                Testeaza-ti cunostintele
            </a>
        </li>
    </ul>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        ?>
        <ul class="Right" >
            <li class="Main">
                <a class="NavMain" data-ui-name="Log in" href="../../../log_in.php">
                    Log in
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Sign up" href="../../../sign_up.php">
                    Sign up
                </a>
            </li>

        </ul>
        <?php
    }
    else
    {
        ?>
        <ul class="Right" >
            <li class="Main">
                <a class="NavMain" data-ui-name="profile" href="../../../Profile.php">
                    <?php   echo $_SESSION['username']; ?>
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Log out" href="../../../Auth/logout.php">
                    Log out
                </a>
            </li>
        </ul>
        <?php
    }
    ?>


</div>


<!--phone sidebar-->



<div class="sidenav">
    <a><img src="../../../pics/header_menu.png" alt="alt"></a>
    <div class="dropdown-container">
        <a href="" class="NavMain">Home</a>
        <a href="../../../Learn/reguli_de_circulatie.php" class="NavMain ">Reguli de circulatie</a>
        <a href="../../../Learn/semne_circulatie.php" class="NavMain_activ" >Semne de circulatie</a>
        <a href="../../../test.php" class="NavMain" >Testeaza-ti cunostintele</a>
        <?php

        if(!isset($_SESSION['username'])){
            ?>
            <a href="../../../log_in.php" class="NavMain" >Log in</a>
            <a href="../../../sign_up.php" class="NavMain" >Sign up</a>
            <?php
        }
        else
        {
            ?>
            <a href="../../../Profile.php" class="NavMain" ><?php   echo $_SESSION['username']; ?></a>
            <a href="../../../Auth/logout.php" class="NavMain" >Log Out</a>
            <?php
        }
        ?>
    </div>
</div>


<h2 class="text-center">Panouri aditionale</h2>
<div class="categorie">
<input type="image" src="../Panouri_aditionale/1.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/2.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/3.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/4.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/5.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/6.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/7.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/8.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/9.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/10.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/11.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/12.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/13.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/14.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/15.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/16.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/17.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/18.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/19.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/20.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/21.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/22.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/23.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/24.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/25.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/26.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/27.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/28.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/29.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/30.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/31.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/32.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/33.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/34.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/35.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/36.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/37.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/38.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/39.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/40.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/41.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/42.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/43.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/44.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/45.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/46.PNG" alt="Panouri aditionale.html" class="center" >
<input type="image" src="../Panouri_aditionale/47.PNG" alt="Panouri aditionale.html" class="center" >
</div>

</body>
</html>