<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>TraST</title>
    <meta charset="utf-8" />
    <meta name="description" content="TraST, invata rutiera de acasa" />
    <meta name="keywords" content="TraST, semne de circulatie, teste auto" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="distribution" content="Global" />
    <meta name="author" content="P.C.N." />
    <meta name="owner"  content="P.C.N." />
    <link rel="icon" href="pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="CSS/web.css" />
</head>



<body >

<!--NAVBAR-->


<div id="nav-background">


    <ul class="Left" >
        <li class="Logo">
            <a class="NavMain" data-ui-name="home" href="home.php">
                <img class="home" alt="Logo" src="pics/logo.png">
            </a>
        </li>
    </ul>
    <ul class="Center" >
        <li class="Main">
            <a class="NavMain" data-ui-name="learn" href="">
                Imbogateste-ti cunostintele
            </a>
            <div  class="dropdown-content">
                <a href="Learn/reguli_de_circulatie.php">Reguli de circulatie</a>
                <a href="Learn/semne_circulatie.php">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">
            <a class="NavMain" data-ui-name="teste" href="test.php">
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
        <a href="home.php" class="NavMain_activ">Home</a>
        <a href="Learn/reguli_de_circulatie.php" class="NavMain ">Reguli de circulatie</a>
        <a href="Learn/semne_circulatie.php" class="NavMain" >Semne de circulatie</a>
        <a href="test.php" class="NavMain" >Testeaza-ti cunostintele</a>
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



<div id="Moto">
    TraST, your road to knowledge
</div>
<div id="home_image">
    <img src="pics/home_page.jpg" alt="Home_pic">

</div>
<p> Traffic Signs Tutor este un site web
    care faciliteaza procesul de invatare
    a semnelor rutiere si a regulilor
    de circulatie din Romania.
    Pentru a realiza acest lucru va oferi
    lectii si chestionare/grile pentru a va
    testa cunostiintele.
</p>
<?php

if(isset($_SESSION['username'])){
?>

<table>
    <tr>
        <th>Pozitie</th>
        <th>Nume</th>
        <th>Categorii parcurse</th>
        <th>Punctaj</th>
    </tr>
    <tr class="hovering">
        <td>#1</td>
        <td><?php echo $_SESSION['#1']['Nickname'] ; ?></td>
        <td><?php echo $_SESSION['#1']['categorii_parcurse'] ; ?></td>
        <td><?php echo $_SESSION['#1']['total'] ; ?></td>
    </tr>
    <tr class="hovering">
        <td>#2</td>
        <td><?php echo $_SESSION['#2']['Nickname'] ; ?></td>
        <td><?php echo $_SESSION['#2']['categorii_parcurse'] ; ?></td>
        <td><?php echo $_SESSION['#2']['total'] ; ?></td>
    </tr>
    <tr class="hovering">
        <td>#3</td>
        <td><?php echo $_SESSION['#3']['Nickname'] ; ?></td>
        <td><?php echo $_SESSION['#3']['categorii_parcurse'] ; ?></td>
        <td><?php echo $_SESSION['#3']['total'] ; ?></td>
    </tr>
    <tr class="hovering">
        <td>#4</td>
        <td><?php echo $_SESSION['#4']['Nickname'] ; ?></td>
        <td><?php echo $_SESSION['#4']['categorii_parcurse'] ; ?></td>
        <td><?php echo $_SESSION['#4']['total'] ; ?></td>
    </tr>
    <tr class="hovering">
        <td>#5</td>
        <td><?php echo $_SESSION['#5']['Nickname'] ; ?></td>
        <td><?php echo $_SESSION['#5']['categorii_parcurse'] ; ?></td>
        <td><?php echo $_SESSION['#5']['total'] ; ?></td>
    </tr>
</table>
    <?php
}
?>

<section class="Learn&study">
    <div class="Learn">
        <a class="learn1" href="">
            <div>
                <img src="pics/avertizare.svg" alt="signs" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de avertizare</h5>
            </div>
        </a>
        <a class="learn2" href="">
            <div>
                <img src="pics/obligare.svg" alt="signs" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de obligare</h5>
            </div>
        </a>
        <a class="learn3" href="">
            <div>
                <img src="pics/prioritate.svg"  alt="signs" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de prioritate</h5>
            </div>
        </a>
        <a class="learn4" href="">
            <div>
                <img src="pics/interzicere.svg" alt="signs" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de interzicere/</h5>
                <h5>restrictie</h5>
            </div>
        </a>

    </div>
    <div class="More">
        <a href="Learn/semne_circulatie.php" class="See_more">
            More
        </a>
    </div>
</section>

<section class="Learn&study">
    <div class="Study">
        <a class="Study1" href="Teste/teste_semne/Indicatoare_rutiere_temporare/test7.php">
            <div>
                <img src="pics/temporare.svg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare rutiere temporare</h5>
            </div>
        </a>
        <a class="Study2" href="Teste/teste_semne/Indicatoare_de_prioritate/test6.php">
            <div>
                <img src="pics/prioritate.svg" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Indicatoare de prioritate</h5>
            </div>
        </a>
        <a class="Study3" href="Teste/test/Test_general_semne/test_general_semne.php">
            <div>
                <img src="pics/obligare.svg" alt="tests" class="sign_image">
            </div>
            <div>
                <h5>Test din semnele de circulatie</h5>
            </div>
        </a>
        <a class="Study4" href="Teste/test/Test_general_reguli/test_general_reguli.php">
            <div>
                <img src="Teste/test/Test_general_semne/3615.jpg" alt="tests" class="sign_image">
            </div>
            <div>
                <h5>Test din regulile de circulatie</h5>
            </div>
        </a>

    </div>

    <div class="More">
        <a href="test.php" class="See_more">
            More
        </a>
    </div>
</section>




</body>
</html>
