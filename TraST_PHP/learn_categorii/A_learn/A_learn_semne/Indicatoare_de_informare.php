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
</div>

<h2 class="text-center">Indicatoare de informare</h2>
<div class="categorie">

<input type="image" src="../Indicatoare_de_informare/1.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/2.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/3.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/4.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/5.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/6.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/7.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/8.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/9.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/10.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/11.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/12.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/13.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/14.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/15.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/16.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/17.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/18.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/19.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/20.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/21.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/22.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/23.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/24.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/25.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/26.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/27.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/28.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/29.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/30.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/31.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/32.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/33.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/34.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/35.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/36.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/37.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/38.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/39.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/40.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/41.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/42.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/43.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/44.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/45.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/46.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/47.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/48.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/49.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/50.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/51.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/52.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/53.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/54.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/55.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/56.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/57.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/58.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/59.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/60.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/61.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/62.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/63.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/64.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/65.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/66.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/67.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/68.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/69.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/71.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/72.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/73.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/74.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/75.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/76.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/77.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/78.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/79.PNG" alt="Indicatoare de informare.html" class="center" >
<input type="image" src="../Indicatoare_de_informare/80.PNG" alt="Indicatoare de informare.html" class="center" >


</div>
<footer>
    <form action="../../../Auth/recordProgressCategories.php" method="post">
        <input type="text" id="sectiune" name="categorie" value="Indicatoare de informare">
        <button id="contor" >Categorie parcursa</button>
    </form>
</footer>
</body>
</html>