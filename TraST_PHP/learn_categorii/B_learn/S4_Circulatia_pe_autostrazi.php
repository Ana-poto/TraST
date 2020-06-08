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
    <link rel="icon" href="../../pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../CSS/web.css" />
    <link rel="stylesheet" href="../../CSS/B_learn.css"/>

</head>

<body>
<!--NAVBAR-->


<div id="nav-background">

    <ul class="Left" >
        <li class="Logo">
            <a class="NavMain" data-ui-name="home" href="../../home.php">
                <img class="home" alt="Logo" src="../../pics/logo.png">
            </a>
        </li>
    </ul>
    <ul class="Center" >
        <li class="Main">
            <a class="NavMain_activ" data-ui-name="learn" >
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
                <a href="../../Learn/reguli_de_circulatie.php" id="_activ">Reguli de circulatie</a>
                <a href="../../Learn/semne_circulatie.php">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">
            <a class="NavMain" data-ui-name="teste" href="../../test.php">
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
                <a class="NavMain" data-ui-name="Log in" href="../../log_in.php">
                    Log in
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Sign up" href="../../sign_up.php">
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
                <a class="NavMain" data-ui-name="profile" href="../../Profile.php">
                    <?php   echo $_SESSION['username']; ?>
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Log out" href="../../Auth/logout.php">
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
    <a><img src="../../pics/header_menu.png" alt="alt"></a>
    <div class="dropdown-container">
        <a href="" class="NavMain">Home</a>
        <a href="../../Learn/reguli_de_circulatie.php" class="NavMain_activ">Reguli de circulatie</a>
        <a href="../../Learn/semne_circulatie.php" class="NavMain" >Semne de circulatie</a>
        <a href="../../test.php" class="NavMain" >Testeaza-ti cunostintele</a>
        <?php

        if(!isset($_SESSION['username'])){
            ?>
            <a href="../../log_in.php" class="NavMain" >Log in</a>
            <a href="../../sign_up.php" class="NavMain" >Sign up</a>
            <?php
        }
        else
        {
            ?>
            <a href="../../Profile.php" class="NavMain" ><?php   echo $_SESSION['username']; ?></a>
            <a href="../../Auth/logout.php" class="NavMain" >Log Out</a>
            <?php
        }
        ?>
    </div>
</div>

<h1 class="text-center">SECTIUNEA 4: Circulatia pe autostrazi</h1>

<div class="content">
    <button class="subcategorie">Articolul 74</button>
    <div class="articol_content">
<p>(1) Pe autostrazi este interzisa circulatia pietonilor, a autovehiculelor cu gabarite sau mase depasite, fara autorizatie speciala de transport eliberata de administratorul drumului public, conform reglementarilor in vigoare, a vehiculelor cu tractiune animala, a animalelor, a vehiculelor trase sau impinse cu mana, a bicicletelor si mopedelor, a tractoarelor si masinilor autopropulsate pentru lucrari agricole, precum si a vehiculelor care, prin constructie sau din alte cauze, nu pot depasi viteza de 50 km/h.</p>
<p>(2) De asemenea, pe autostrazi sunt interzise invatarea conducerii unui vehicul, incercarile prototipurilor de sasiuri si de autovehicule, manifestatiile, defilarile, caravanele publicitare, antrenamentele si competitiile sportive de orice fel, precum si cortegiile.</p>
<p>(3) Se interzice circulatia, oprirea sau stationarea autovehiculelor pe banda de urgenta, cu exceptia cazurilor justificate, precum si a autovehiculelor cu regim de circulatie prioritar.</p>
<p>(4) Circulatia autovehiculelor destinate transportului public de persoane sau de marfuri se efectueaza, de regula, numai pe banda marginala din partea dreapta a autostrazii, in sensul de mers.</p>
    </div>
</div>

<footer>
    <form action="../../Auth/recordProgressSections.php" method="post">
        <input type="text" id="sectiune" name="sectiune" value="s4">
        <button id="contor" >Sectiune parcursa</button>
    </form>
</footer>
    <script src="../../CSS/expand_B.js"></script>


</body>
</html>