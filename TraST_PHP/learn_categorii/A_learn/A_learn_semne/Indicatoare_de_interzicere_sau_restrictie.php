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



<h2 class="text-center">Indicatoare de interzicere sau restrictie</h2>
<div class="categorie">
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/1.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/2.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/3.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/4.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/5.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/6.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/7.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/8.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/9.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/10.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/11.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/12.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/13.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/14.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/15.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/16.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/17.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/18.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/19.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/20.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/21.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/22.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/23.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/24.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/25.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/26.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/27.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/28.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/29.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/30.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/31.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/32.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/33.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/34.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/35.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/36.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/37.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/38.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/39.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/40.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/41.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/42.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/43.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/44.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/45.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/46.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >
<input type="image" src="../Indicatoare_de_interzicere_sau_restrictie/47.PNG" alt="Indicatoare de interzicere sau restrictie.html" class="center" >

</div>
</body>
</html>