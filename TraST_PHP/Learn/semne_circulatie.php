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
    <link rel="icon" href="../pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../CSS/web.css" />
    <link rel="stylesheet" href="../CSS/learn.css"/>
</head>



<body>

<div id="nav-background">

    <ul class="Left" >
        <li class="Logo">
            <a class="NavMain" data-ui-name="home" href="../home.php">
                <img class="home" alt="Logo" src="../pics/logo.png">
            </a>
        </li>
    </ul>
    <ul class="Center" >
        <li class="Main">
            <a class="NavMain_activ" data-ui-name="learn" >
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
                <a href="reguli_de_circulatie.php">Reguli de circulatie</a>
                <a href="semne_circulatie.php" id="_activ">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">

            <a class="NavMain" data-ui-name="teste" href="../test.php">
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
                <a class="NavMain" data-ui-name="Log in" href="../log_in.php">
                    Log in
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Sign up" href="../sign_up.php">
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
                <a class="NavMain" data-ui-name="profile" href="../Profile.php">
                    <?php   echo $_SESSION['username']; ?>
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Log out" href="../Auth/logout.php">
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
    <a><img src="../pics/header_menu.png" alt="alt"></a>
    <div class="dropdown-container">
        <a href="../home.php" class="NavMain">Home</a>
        <a href="../Learn/reguli_de_circulatie.php" class="NavMain">Reguli de circulatie</a>
        <a href="semne_circulatie.php" class="NavMain_activ" >Semne de circulatie</a>
        <a href="../test.php" class="NavMain" >Testeaza-ti cunostintele</a>
        <?php

        if(!isset($_SESSION['username'])){
            ?>
            <a href="../log_in.php" class="NavMain" >Log in</a>
            <a href="../sign_up.php" class="NavMain" >Sign up</a>
            <?php
        }
        else
        {
            ?>
            <a href="../Profile.php" class="NavMain" ><?php   echo $_SESSION['username']; ?></a>
            <a href="../Auth/logout.php" class="NavMain" >Log Out</a>
            <?php
        }
        ?>
    </div>
</div>

<h1 class="text-center1">Indicatoare si marcaje rutiere</h1>
<h2 class="text-center">Capitole</h2>


<div id="gallerywrapper">
    <div id="gallery">
        <div id="pic1">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_avertizare.php">
                <input type="image" src="../CSS/poze_categorii_learn/1.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_avertizare.html" class="img"  >
            </form>
            <a class="previous" href="#pic19">&lt;</a>
            <a class="next" href="#pic2">&gt;</a>
            <h2>Indicatoare de avertizare</h2>
        </div>
        <div id="pic2">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_informare.php" >
                <input type="image" src="../CSS/poze_categorii_learn/6.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_informare.html" class="img" >
            </form>
            <a class="previous" href="#pic1">&lt;</a>
            <a class="next" href="#pic3">&gt;</a>
            <h2>Indicatoare de informare</h2>
        </div>
        <div id="pic3">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_interzicere_sau_restrictie.php">
                <input type="image" src="../CSS/poze_categorii_learn/3.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_interzicere_sau_restrictie.html" class="img" >
            </form>
            <a class="previous" href="#pic2">&lt;</a>
            <a class="next" href="#pic4">&gt;</a>
            <h2>Indicatoare de interzicere sau restrictie</h2>
        </div>
        <div id="pic4">
            <form action="../learn_categorii/A_learn/A_learn_semne/Panouri_aditionale.php">
                <input type="image" src="../CSS/poze_categorii_learn/8.PNG"  alt="learn_categorii/A_learn_semne/Panouri_aditionale.html" class="img">
            </form>
            <a class="previous" href="#pic3">&lt;</a>
            <a class="next" href="#pic5">&gt;</a>
            <h2>Panouri aditionale</h2>
        </div>
        <div id="pic5">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_informare_turistica.php">
                <input type="image" src="../CSS/poze_categorii_learn/7.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_informare_turistica.html" class="img">
            </form>
            <a class="previous" href="#pic4">&lt;</a>
            <a class="next" href="#pic6">&gt;</a>
            <h2>Indicatoare de informare turistica</h2>
        </div>
        <div id="pic6">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_obligare.php">
                <input type="image" src="../CSS/poze_categorii_learn/4.PNG"  alt="learn_categorii/A_learn_semne/Panouri_aditionale.html" class="img">
            </form>
            <a class="previous" href="#pic5">&lt;</a>
            <a class="next" href="#pic7">&gt;</a>
            <h2>Indicatoare de obligare</h2>
        </div>
        <div id="pic7">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_orientare.php">
                <input type="image" src="../CSS/poze_categorii_learn/5.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_obligare.html" class="img">
            </form>
            <a class="previous" href="#pic6">&lt;</a>
            <a class="next" href="#pic8">&gt;</a>
            <h2>Indicatoare de orientare</h2>
        </div>
        <div id="pic8">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_de_prioritate.php">
                <input type="image" src="../CSS/poze_categorii_learn/2.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_de_prioritate.html" class="img">
            </form>
            <a class="previous" href="#pic7">&lt;</a>
            <a class="next" href="#pic9">&gt;</a>
            <h2>Indicatoare de prioritate</h2>

        </div>
        <div id="pic9">
            <form action="../learn_categorii/A_learn/A_learn_semne/Semnale_luminoase.php">
                <input type="image" src="../CSS/poze_categorii_learn/9.PNG"  alt="learn_categorii/A_learn_semne/Semnale_luminoase.html" class="img">
            </form>
            <a class="previous" href="#pic8">&lt;</a>
            <a class="next" href="#pic10">&gt;</a>
            <h2>Semnale luminoase</h2>

        </div>
        <div id="pic10">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_instalate_la_trecerea_cu_calea_ferata.php">
                <input type="image" src="../CSS/poze_categorii_learn/10.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_instalate_la_trecerea_cu_calea_ferata.html" class="img">
            </form>
            <a class="previous" href="#pic9">&lt;</a>
            <a class="next" href="#pic11">&gt;</a>
            <h2>Indicatoare instalate la trecerea cu calea ferata</h2>

        </div>
        <div id="pic11">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_kilometrice.php">
                <input type="image" src="../CSS/poze_categorii_learn/11.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_kilometrice.html" class="img">
            </form>
            <a class="previous" href="#pic10">&lt;</a>
            <a class="next" href="#pic12">&gt;</a>
            <h2>Indicatoare kilometrice</h2>

        </div>
        <div id="pic12">
            <form action="../learn_categorii/A_learn/A_learn_semne/Indicatoare_rutiere_temporare.php">
                <input type="image" src="../CSS/poze_categorii_learn/12.PNG"  alt="learn_categorii/A_learn_semne/Indicatoare_rutiere_temporare.html" class="img">
            </form>
            <a class="previous" href="#pic11">&lt;</a>
            <a class="next" href="#pic13">&gt;</a>
            <h2>Indicatoare rutiere temporare</h2>

        </div>
        <div id="pic13">
            <form action="../learn_categorii/A_learn/A_learn_semne/Mijloace_auxiliare_de_semnalizare_a_lucrărilor.php">
                <input type="image" src="../CSS/poze_categorii_learn/13.PNG"  alt="learn_categorii/A_learn_semne/Mijloace_auxiliare_de_semnalizare_a_lucrărilor.html" class="img">
            </form>
            <a class="previous" href="#pic12">&lt;</a>
            <a class="next" href="#pic14">&gt;</a>
            <h2>Mijloace auxiliare de semnalizare a lucrărilor</h2>

        </div>
        <div id="pic14">
            <form action="../learn_categorii/A_learn/A_learn_semne/Marcaje_longitudinale.php">
                <input type="image" src="../CSS/poze_categorii_learn/14.PNG"  alt="learn_categorii/A_learn_semne/Marcaje_longitudinale.html" class="img">
            </form>
            <a class="previous" href="#pic13">&lt;</a>
            <a class="next" href="#pic15">&gt;</a>
            <h2>Marcaje longitudinale</h2>

        </div>
        <div id="pic15">
            <form action="../learn_categorii/A_learn/A_learn_semne/Marcaje_transversale.php">
                <input type="image" src="../CSS/poze_categorii_learn/15.PNG"  alt="learn_categorii/A_learn_semne/Marcaje_longitudinale.html" class="img">
            </form>
            <a class="previous" href="#pic14">&lt;</a>
            <a class="next" href="#pic16">&gt;</a>
            <h2>Marcaje transversale</h2>
        </div>
        <div id="pic16">
            <form action="../learn_categorii/A_learn/A_learn_semne/Marcaje_diverse.php">
                <input type="image" src="../CSS/poze_categorii_learn/16.PNG"  alt="learn_categorii/A_learn_semne/Marcaje_diverse.html" class="img">
            </form>
            <a class="previous" href="#pic15">&lt;</a>
            <a class="next" href="#pic17">&gt;</a>
            <h2>Marcaje diverse</h2>
        </div>
        <div id="pic17">
            <form action="../learn_categorii/A_learn/A_learn_semne/Marcaje_laterale.php">
                <input type="image" src="../CSS/poze_categorii_learn/17.PNG"  alt="learn_categorii/A_learn_semne/Marcaje_laterale.html" class="img">
            </form>
            <a class="previous" href="#pic16">&lt;</a>
            <a class="next" href="#pic18">&gt;</a>
            <h2>Marcaje laterale</h2>
        </div>
        <div id="pic18">
            <form action="../learn_categorii/A_learn/A_learn_semne/Semnalele_polițistului_rutier.php">
                <input type="image" src="../CSS/poze_categorii_learn/18.PNG"  alt="learn_categorii/A_learn_semne/Semnalele_polițistului_rutier.html" class="img">
            </form>
            <a class="previous" href="#pic17">&lt;</a>
            <a class="next" href="#pic19">&gt;</a>
            <h2>Semnalele polițistului rutier</h2>
        </div>

    </div>

</div>

</body>
</html>
