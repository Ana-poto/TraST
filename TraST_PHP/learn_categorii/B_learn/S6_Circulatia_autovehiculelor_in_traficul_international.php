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

<h1 class="text-center">SECTIUNEA 6: Circulatia autovehiculelor in traficul international</h1>

<div class="content">
<button class="subcategorie">Articolul 82</button>
<div class="articol_content">
    
    <p>(1) Autovehiculele, tractoarele agricole sau forestiere si remorcile inmatriculate in Romania 
        pot trece frontiera de stat pe drumurile publice, daca indeplinesc conditiile cerute pentru
         a fi admise in circulatia internationala, iar conducatorii lor poseda permis de conducere
          valabil in conditiile stabilite prin tratatele la care Romania este parte sau care
           este eliberat de autoritatile competente ale statelor membre ale Uniunii Europene
            ori Spatiului Economic European sau a carui valabilitate este recunoscuta in aceste state pe baza de reciprocitate.</p>
    <p>(2) Autovehiculele , tractoarele agricole sau forestiere si remorcile inmatriculate in alte state
         pot trece frontiera de stat si pot circula pe drumurile publice din Romania, 
         daca indeplinesc conditiile tehnice prevazute in Conventia asupra circulatiei rutiere,
          incheiata la Viena la 8 noiembrie 1968 si ratificata de Romania prin Decretul nr. 318/1980 , 
          dar numai pe perioada cat sunt asigurate pentru cazurile de raspundere
           civila ca urmare a prejudiciilor produse prin accidente de autovehicule.</p>
    <p>(4) Autovehiculele, tractoarele agricole sau forestiere si remorcile inmatriculate
         in alte state, detinute de persoane care au sediul sau domiciliul in Romania, 
         pot fi conduse pe drumurile publice pe o perioada de maximum 90 de zile 
         de la introducerea acestora in tara, daca sunt asigurate pentru cazurile
          de raspundere civila ca urmare a pagubelor produse prin accidente de circulatie.</p>
    <p>(5) Persoanele care si-au stabilit domiciliul ori resedinta in Romania pot 
        sa isi inmatriculeze autovehiculele sau remorcile la autoritatea competenta
         pe raza careia au domiciliul ori resedinta, dupa caz.</p>
    <p>(6) Autovehiculele si tractoarele agricole sau forestiere inmatriculate in statele care nu sunt semnatare 
        ale Conventiei asupra circulatiei rutiere, prevazuta la alin. (2), sunt obligate sa poarte in partea din 
        spate semnul distinctiv al statului care a efectuat inmatricularea.</p>
    
</div>

<button class="subcategorie">Articolul 83</button>
<div class="articol_content">
    
    <p>(1) Au dreptul sa conduca autovehicule pe drumurile publice din Romania, daca indeplinesc conditiile prevazute
         la art. 20 si art. 23 alin. (1), titularii permiselor de conducere nationale valabile, eliberate de autoritatile:
    <p>a)statelor membre ale Conventiei asupra circulatiei rutiere, prevazuta la art. 82 alin. (2);</p>
    <p>b) statelor membre ale Uniunii Europene;</p>
    <p>c) statelor cu care Romania a incheiat un tratat privind recunoasterea reciproca a permiselor de conducere auto.</p>
    

    <p>(2) Pentru a conduce un autovehicul pe teritoriul Romaniei, persoanele care sunt titulare
         ale unui permis de conducere national eliberat de autoritatile unui stat care 
         nu este membru al Conventiei asupra circulatiei rutiere si nici membru al Uniunii 
         Europene ori cu care Romania nu a incheiat un tratat privind recunoasterea reciproca
          a permiselor de conducere auto trebuie sa posede si permis de conducere international.</p>
    <p>(3) Permisele de conducere nationale eliberate de autoritatile prevazute la alin. (1),
         precum si cele a caror valabilitate este recunoscuta de Romania in mod unilateral, 
         detinute de persoane care au domiciliul sau resedinta in Romania in sensul art. 231
          alin. (2), pot fi preschimbate cu documente similare romanesti,
           in conditiile stabilite prin ordin al ministrului afacerilor interne,
            care se publica in Monitorul Oficial al Romaniei, Partea I.</p>
    
    </div>
</div>

<script src="../../CSS/expand_B.js"></script>

</body>
</html>
