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


<h1 class="text-center">SECTIUNEA 1: Obligatiile participantilor la trafic</h1>


<div class="content">
    <button class="subcategorie">Articolul 35</button>
    <div class="articol_content">
        <p>(1) Participantii la trafic trebuie sa aiba un comportament care sa nu afecteze fluenta si siguranta circulatiei, sa nu puna in pericol viata sau integritatea corporala a persoanelor si sa nu aduca prejudicii proprietatii publice ori private.</p>
        <p>(2) Participantii la trafic sunt obligati ca, la cererea politistului rutier, sa inmaneze acestuia documentul de identitate sau, dupa caz, permisul de conducere, documentul de inmatriculare ori de inregistrare a vehiculului condus, documentele referitoare la bunurile transportate, precum si alte documente prevazute de lege.</p>
        <p>(3) In exercitarea atributiilor care ii revin, politistul rutier are dreptul sa verifice vehiculul, precum si identitatea conducatorului sau a pasagerilor aflati in interiorul acestuia atunci cand exista indicii despre savarsirea unei fapte de natura contraventionala sau penala.</p>
        <p>(4) In exercitarea atributiilor de dirijare a circulatiei rutiere, politistii rutieri sunt obligati sa poarte uniforma cu inscrisuri si insemne distinctive.</p>
        <p>(4.1.)Functionarii din cadrul Agentiei Nationale de Administrare Fiscala, care in scopul exercitarii atributiilor de control specifice efectueaza semnale de oprire pentru conducatorii autovehiculelor, sunt obligati sa poarte uniforma cu inscrisuri si insemne distinctive si mijloace de protectie fluorescent-reflectorizante pe fond de culoare rosie, stabilite prin hotarare a Guvernului.</p>
        <p>(5) Politistii de frontiera, indrumatorii de circulatie ai Ministerului Apararii, agentii cailor ferate, personalul autorizat din zona lucrarilor pe drumurile publice, precum si membrii patrulelor scolare de circulatie sunt obligati ca, pe timpul exercitarii atributiilor, sa poarte echipament de protectie-avertizare fluorescent-reflectorizant.</p>
        <p>(6) Conducatorii autovehiculelor si tractoarelor agricole sau forestiere cu masa maxima autorizata mai mare de 3,5 tone sunt obligati sa poarte echipament de protectie-avertizare fluorescent-reflectorizant atunci cand executa interventii la vehiculul care se afla pe partea carosabila a drumului public.</p>
        <p>(7) Nevazatorii sunt obligati sa poarte in deplasarea pe drumurile publice baston de culoare alba.</p>
    </div>


    <button class="subcategorie">Articolul 36</button>
    <div class="articol_content">
        <p>(1) Conducatorii de autovehicule si tractoare agricole sau forestiere si persoanele care ocupa locuri prevazute prin constructie cu centuri sau dispozitive de siguranta omologate trebuie sa le poarte in timpul circulatiei pe drumurile publice, cu exceptia cazurilor prevazute in regulament.</p>
        <p>(1.1.)Conducatorii de autovehicule avand locuri prevazute prin constructie cu centuri de siguranta trebuie sa informeze pasagerii cu privire la obligatia legala de a le purta in timpul circulatiei pe drumurile publice.</p>
        <p>(1.2.)Conducatorii de autovehicule avand locuri prevazute prin constructie cu centuri de siguranta au obligatia sa se asigure ca, pe timpul conducerii vehiculului, minorii poarta centurile de siguranta sau sunt transportati numai in dispozitive de fixare in scaune pentru copii omologate, in conditiile prevazute de regulament.</p>
        <p>(1.3.)Conducatorilor de autovehicule le este interzis sa transporte copii in varsta de pana la 3 ani in autovehicule care nu sunt echipate cu sisteme de siguranta, cu exceptia celor destinate transportului public de persoane, precum si a taxiurilor daca in acestea din urma ocupa orice alt loc decat cel de pe scaunul din fata, in conditiile prevazute in regulament. Copiii cu varsta de peste 3 ani, avand o inaltime de pana la 150 cm, pot fi transportati in autovehicule care nu sunt echipate cu sisteme de siguranta doar daca ocupa, pe timpul transportului, orice alt loc decat cel de pe scaunul din fata.</p>
        <p>(2) Pe timpul deplasarii pe drumurile publice, conducatorii motocicletelor, mopedelor si persoanele transportate pe acestea au obligatia sa poarte casca de protectie omologata.</p>
        <p>(3) Conducatorilor de vehicule le este interzisa folosirea telefoanelor mobile atunci cand acestia se afla in timpul mersului, cu exceptia celor prevazute cu dispozitive tip A&nbsp;"maini libere".</p>
    </div>


        <button class="subcategorie">Articolul 37</button>
        <div class="articol_content">
            <p>(1) Conducatorii de vehicule sunt obligati sa opreasca imediat, pe acostament sau, in lipsa acestuia, cat mai aproape de marginea drumului sau bordura trotuarului, in sensul de deplasare, la apropierea si la trecerea autovehiculelor cu regim de circulatie prioritara care au in functiune mijloacele speciale de avertizare luminoasa de culoare rosie si sonore.</p>
            <p>(2) Conducatorii de vehicule sunt obligati sa reduca viteza, sa circule cat mai aproape de marginea drumului in sensul de deplasare si sa acorde prioritate la trecerea autovehiculelor cu regim de circulatie prioritara care au in functiune mijloacele speciale de avertizare luminoasa de culoare albastra si sonore.</p>
            <p>(3) In situatiile prevazute la alin. (1) si (2), pietonilor le sunt interzise traversarea si circulatia pe carosabil pana la trecerea vehiculelor respective.</p>
</div>


    <button class="subcategorie">Articolul 38</button>
    <div class="articol_content">
            <p>Conducatorii vehiculelor, cu exceptia celor trase sau impinse cu mana, instructorii auto atestati sa efectueze instruirea practica a persoanelor pentru obtinerea permisului de conducere, precum si examinatorul autoritatii competente, in timpul desfasurarii probelor practice ale examenului pentru obtinerea permisului de conducere, sunt obligati sa se supuna testarii aerului expirat si/sau recoltarii probelor biologice in vederea stabilirii alcoolemiei ori a consumului de produse sau substante stupefiante ori a medicamentelor cu efecte similare acestora, la solicitarea politistului rutier.</p>
    </div>


    <button class="subcategorie">Articolul 39</button>
    <div class="articol_content">
        <p>Proprietarul sau detinatorul mandatat al unui vehicul este obligat sa comunice politiei rutiere, la cererea acesteia si in termenul solicitat, identitatea persoanei careia i-a incredintat vehiculul pentru a fi condus pe drumurile publice.</p>
    </div>


        <button class="subcategorie">Articolul 40</button>
        <div class="articol_content">
            <p>Regulile de circulatie pe drumurile publice aplicabile autovehiculelor si tractoarelor agricole sau forestiere destinate transporturilor de marfuri, celor cu mase sau cu dimensiuni de gabarit depasite ori care transporta marfuri sau produse periculoase se stabilesc prin regulament, in conformitate cu reglementarile in vigoare.</p>
        </div>

</div>

    <footer>
        <form action="../../Auth/recordProgressSections.php" method="post">
            <input type="text" id="sectiune" name="sectiune" value="s1">
        <button id="contor" >Sectiune parcursa</button>
        </form>
    </footer>

<script src="../../CSS/expand_B.js"></script>
</body>
</html>