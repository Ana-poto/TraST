<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>TraST</title>
    <meta charset="utf-8" />
    <meta name="description" content="TraST, invata rutiera de acasa" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="TraST, semne de circulatie, teste auto" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="P.C.N" />
    <meta name="owner"  content="P.C.N" />
    <link rel="icon" href="pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="CSS/web.css" />
</head>

<body>

<div id="nav-background">

    <ul class="Left" >
        <li class="Logo">
            <a class="NavMain" data-ui-name="home" href="home.php">
                <img class="home" alt="Logo" src="pics/logo.png">
            </a>
        </li>
    </ul>

    <ul class="Center">
        <li class="Main">
            <a class="NavMain" data-ui-name="learn" href="">
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
                <a href="Learn/reguli_de_circulatie.php">Reguli de circulatie</a>
                <a href="Learn/semne_circulatie.php">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">
            <a class="NavMain_activ" data-ui-name="teste" href="test.php">
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
                <a class="NavMain" data-ui-name="Log in" href="log_in.php">
                    Log in
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Sign up" href="sign_up.php">
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
                <a class="NavMain" data-ui-name="profile" href="Profile.php">
                    <?php   echo $_SESSION['username']; ?>
                </a>
            </li>
            <li class="Main">
                <a class="NavMain" data-ui-name="Log out" href="Auth/logout.php">
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
    <a><img src="pics/header_menu.png" alt="alt"></a>
    <div class="dropdown-container">
        <a href="home.php" class="NavMain">Home</a>
        <a href="Learn/reguli_de_circulatie.php" class="NavMain ">Reguli de circulatie</a>
        <a href="Learn/semne_circulatie.php" class="NavMain" >Semne de circulatie</a>
        <a href="test.php" class="NavMain_activ" >Testeaza-ti cunostintele</a>
        <?php

        if(!isset($_SESSION['username'])){
            ?>
            <a href="log_in.php" class="NavMain" >Log in</a>
            <a href="sign_up.php" class="NavMain" >Sign up</a>
            <?php
        }
        else
        {
            ?>
            <a href="Profile.php" class="NavMain" ><?php   echo $_SESSION['username']; ?></a>
            <a href="Auth/logout.php" class="NavMain" >Log Out</a>
            <?php
        }
        ?>
    </div>
</div>
<section class="Learn&study2">
    <h2>Teste pe categorii</h2>
    <div class="Learn">
        <a class="Learn1" href="Teste/teste_semne/Indicatoare_de_avertizare/test1.php">
            <div>
                <img src="pics/avertizare.svg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de avertizari</h5>
            </div>
        </a>
        <a class="Learn2" href="Teste/teste_semne/Indicatoare_de_informare/test2.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_de_informare/17.jpg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de informare</h5>
            </div>
        </a>
        <a class="Learn3" href="Teste/teste_semne/Indicatoare_de_interzicere_sau_restrictie/test3.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_de_interzicere_sau_restrictie/36.png" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de interzicere sau restrictie</h5>
            </div>
        </a>
        <a class="Learn4" href="Teste/teste_semne/Indicatoare_de_obligare/test4.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_de_obligare/15.jpg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de obligare</h5>
            </div>
        </a>
        <a class="Learn5" href="Teste/teste_semne/Indicatoare_de_orientare/test5.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_de_orientare/27.jpg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de orientare</h5>
            </div>
        </a>
        <a class="Learn6" href="Teste/teste_semne/Indicatoare_de_prioritate/test6.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_de_prioritate/5.jpg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de prioritate</h5>
            </div>
        </a>
        <a class="Learn7" href="Teste/teste_semne/Indicatoare_rutiere_temporare/test7.php">
            <div>
                <img src="Teste/teste_semne/Indicatoare_rutiere_temporare/1.jpg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare rutiere temporare</h5>
            </div>
        </a>
        <a class="Learn8" href="Teste/teste_semne/Marcaje/Marcaje_diverse/test8.php">
            <div>
                <img src="Teste/teste_semne/Marcaje/Marcaje_diverse/3.PNG" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Marcaje diverse</h5>
            </div>
        </a>
        <a class="Learn8" href="Teste/teste_semne/Marcaje/Marcaje_laterale+longitudinale/test9.php">
            <div>
                <img src="Teste/teste_semne/Marcaje/Marcaje_laterale+longitudinale/7.PNG" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Marcaje laterale si longitudinale</h5>
            </div>
        </a>
        <a class="Learn8" href="Teste/teste_semne/Marcaje/Marcaje_transversale/test10.php">
            <div>
                <img src="Teste/teste_semne/Marcaje/Marcaje_transversale/3.PNG" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Marcaje transversale</h5>
            </div>
        </a>
    </div>
</section>

<section class="TestTotal">
    <h2>Crezi ca stii din tot?</h2>
    <div class="Total">
        <a class="Learn_Complet" href="Teste/test/Test_general_semne/test_general_semne.php">
            <div>
                <img src="Teste/test/Test_general_semne/3438.jpg" alt="tests" class="sign_image">
            </div>
            <div>
                <h5>Test din semnele de circulatie</h5>
            </div>
        </a>
        <a class="Learn_Complet" href="Teste/test/Test_general_reguli/test_general_reguli.php">
            <div>
                <img src="Teste/test/Test_general_semne/3615.jpg" alt="tests" class="sign_image">
            </div>
            <div>
                <h5>Test din regulile de circulatie</h5>
            </div>
        </a>

    </div>
</section>
</body>
</html>
