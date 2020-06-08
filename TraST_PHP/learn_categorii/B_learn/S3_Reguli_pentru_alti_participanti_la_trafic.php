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

<h1 class="text-center">SECTIUNEA 3: Reguli pentru alti participanti la trafic</h1>

<div class="content">
    <button class="subcategorie">Articolul 70</button>
    <div class="articol_content">
        <p>(1) Pentru a conduce un moped pe drumurile publice, conducatorul acestuia trebuie sa aiba varsta de cel putin 16 ani.</p>
        <p>(2) Pentru a conduce o bicicleta pe drumurile publice, conducatorul acesteia trebuie sa aiba varsta de cel putin 14 ani.</p>
        <p>(3) Bicicletele si mopedele care circula pe drumurile publice trebuie sa fie echipate cu mijloace de iluminare si dispozitive reflectorizant-fluorescente. Este interzisa circulatia acestora pe timp de noapte fara aceste mijloace si dispozitive in stare de functionare.</p>
    </div>

    <button class="subcategorie">Articolul 71</button>
    <div class="articol_content">
        <p>(1) Sunt interzise accesul si deplasarea vehiculelor cu tractiune animala, a masinilor si utilajelor autopropulsate utilizate in lucrari de constructii, agricole si forestiere, a animalelor de povara, de tractiune sau de calarie, precum si a animalelor izolate sau in turma pe drumurile nationale, in municipii si pe drumurile la inceputul carora exista indicatoare de interzicere a accesului.</p>
        <p>(2) Autoritatile administratiei publice locale au obligatia sa amenajeze, cu acordul administratorului drumului public si avizul politiei rutiere, drumuri laterale, cai de acces catre aceste drumuri, precum si locuri de traversare a drumurilor publice destinate circulatiei animalelor si vehiculelor prevazute la alin. (1), semnalizate corespunzator.</p>
        <p>(3) Pentru a circula pe drumurile publice pe care accesul le este permis, animalele, vehiculele trase sau impinse cu mana, animalele de povara, de tractiune si de calarie vor avea cate un conducator, iar vehiculele cu tractiune animala vor fi echipate si cu mijloace de iluminare si dispozitive reflectorizant-fluorescente, in conformitate cu prevederile regulamentului.</p>
    </div>

    <button class="subcategorie">Articolul 72</button>
    <div class="articol_content">
        <p>(1) Pietonii sunt obligati sa se deplaseze numai pe trotuar, iar in lipsa acestuia, pe acostamentul din partea stanga a drumului, in directia lor de mers. Cand si acostamentul lipseste, pietonii sunt obligati sa circule cat mai aproape de marginea din partea stanga a partii carosabile, in directia lor de mers.</p>
        <p>(2) Pietonii au prioritate de trecere fata de conducatorii de vehicule numai atunci cand sunt angajati in traversarea drumurilor publice prin locuri special amenajate, marcate si semnalizate corespunzator, ori la culoarea verde a semaforului destinat pietonilor.</p>
        <p>(3) Traversarea drumului public de catre pietoni se face perpendicular pe axa acestuia, numai prin locurile special amenajate si semnalizate corespunzator, iar in lipsa acestora, in localitati, pe la coltul strazii, numai dupa ce s-au asigurat ca o pot face fara pericol pentru ei si pentru ceilalti participanti la trafic.</p>
        <p>(4) Pietonii surprinsi si accidentati ca urmare a traversarii prin locuri nepermise, la culoarea rosie a semaforului destinat acestora, sau a nerespectarii altor obligatii stabilite de normele rutiere poarta intreaga raspundere a accidentarii lor, in conditiile in care conducatorul vehiculului respectiv a respectat prevederile legale privind circulatia prin acel sector.</p>
        <p>(5) Sunt asimilate pietonilor persoanele care conduc un scaun rulant de constructie speciala, cele care conduc vehicule destinate exclusiv tragerii sau impingerii cu mana, precum si cele care se deplaseaza pe patine sau dispozitive cu role.</p>
        <p>(6) Se excepteaza de la respectarea regulilor stabilite pentru pietoni politistul rutier si persoanele care se afla pe platforma drumului public si sunt autorizate, in exercitarea atributiilor de serviciu, sa indrume sau sa dirijeze circulatia rutiera, in conditiile stabilite prin regulament.</p>
        <p>(7) Este interzisa ocuparea trotuarelor cu vehicule imobilizate, iar cand aceasta este permisa, conform indicatoarelor sau marcajelor, latimea minima a trotuarului lasat la dispozitia pietonilor trebuie sa fie de cel putin un metru.</p>
    </div>

    <button class="subcategorie">Articolul 73</button>
    <div class="articol_content">
        <p>Regulile privind circulatia pe drumurile publice a bicicletelor, vehiculelor cu tractiune animala, a conducatorilor de coloane militare, cortegii, grupuri organizate, precum si de animale se stabilesc prin regulament.</p>
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