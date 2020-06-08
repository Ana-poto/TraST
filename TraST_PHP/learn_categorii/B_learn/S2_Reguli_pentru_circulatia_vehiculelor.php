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

<h1 class="text-center">SECTIUNEA 2: Reguli pentru circulatia vehiculelor</h1>

<h2 class="text-center">SUBSECTIUNEA 1: Pozitii in timpul mersului si circulatia pe benzi</h2>
<div class="content">
    <button class="subcategorie">Articolul 41</button>
    <div class="articol_content">
        <p>(1) Vehiculele si animalele, atunci cand circula pe drumurile publice pe care le este permis accesul, trebuie conduse pe partea din dreapta a drumului public, in sensul de circulatie, cat mai aproape de marginea partii carosabile, cu respectarea semnificatiei semnalizarii rutiere si a regulilor de circulatie.</p>
        <p>(2) Numerotarea benzilor de circulatie pe fiecare sens se efectueaza in ordine crescatoare de la marginea din partea dreapta a drumului catre axa acestuia. In cazul autostrazilor, banda de urgenta nu intra in numerotarea benzilor de circulatie.</p>
        <p>(3) Daca un drum este prevazut cu o pista speciala destinata circulatiei bicicletelor, acestea vor fi conduse numai pe pista respectiva.</p>
    </div>
 

    <button class="subcategorie">Articolul 42</button>
    <div class="articol_content">
        <p>Cand circulatia se desfasoara pe doua sau mai multe benzi pe sens, acestea se folosesc de catre conducatorii de vehicule in functie de intensitatea traficului si viteza de deplasare, avand obligatia sa revina pe prima banda ori de cate ori acest lucru este posibil, daca aceasta nu este destinata vehiculelor lente sau transportului public de persoane.</p>
    </div>

    <button class="subcategorie">Articolul 43</button>
    <div class="articol_content">
        <p>(1) Daca un drum este prevazut cu o banda destinata vehiculelor lente sau transportului public de persoane, semnalizata ca atare, acestea vor circula numai pe banda respectiva.</p>
        <p>(2) Conducatorul de vehicul care circula pe banda situata langa marginea partii carosabile trebuie sa acorde prioritate de trecere vehiculelor care efectueaza transport public de persoane numai atunci cand conducatorii acestora semnalizeaza intentia de a reintra in trafic din statiile prevazute cu alveole si s-au asigurat ca prin manevra lor nu pun in pericol siguranta celorlalti participanti la trafic.</p><p></p><p></p>
    </div>
    
    </div>
    

<h2 class="text-center">SUBSECTIUNEA 2: Mijloacele de avertizare folosite de conducatorii de vehicule</h2>

<div class="content">
    <button class="subcategorie">Articolul 44</button>
    <div class="articol_content">
        <p>(1) In circulatia pe drumurile publice conducatorii de vehicule pot folosi, in conditiile prevazute de regulament, mijloacele de avertizare sonora si luminoasa aflate in dotare si omologate.</p>
        <p>(2) In circulatia pe autostrazi, pe drumurile expres si pe cele nationale europene (E) conducatorii de autovehicule si tractoare agricole sau forestiere sunt obligati sa foloseasca si in timpul zilei luminile de intalnire.</p>
        <p>(3) Conducatorii motocicletelor si mopedelor sunt obligati sa foloseasca luminile de intalnire pe toata durata deplasarii acestora pe drumurile publice.</p>
        <p>(4) In circulatia pe drumurile publice se interzice detinerea la vedere, montarea si folosirea mijloacelor speciale de avertizare sonora si luminoasa pe si in alte autovehicule decat cele prevazute la art. 32 alin. (2), precum si detinerea, montarea sau folosirea pe autovehicule a sistemelor care perturba buna functionare a dispozitivelor de supraveghere a traficului.</p>
        <p>(5) Conducatorii de autovehicule pot fi avertizati de politia rutiera in legatura cu prezenta in trafic a dispozitivelor de masurare a vitezei, prin mass-media sau panouri de avertizare. Conducatorii de autovehicule pot folosi mijloace proprii de detectare a dispozitivelor de masurare a vitezei.</p><p></p><p></p>
    </div>
</div>

<h2 class="text-center">SUBSECTIUNEA 3: Depasirea</h2>

<div class="content">
    <button class="subcategorie">Articolul 45</button>
    <div class="articol_content">
        <p>(1) Depasirea este manevra prin care un vehicul trece inaintea altui vehicul ori pe langa un obstacol, aflat pe acelasi sens de circulatie, prin schimbarea directiei de mers si iesirea de pe banda de circulatie sau din sirul de vehicule in care s-a aflat initial.</p>
        <p>(2) Conducatorul vehiculului care se angajeaza in depasire trebuie sa se asigure ca vehiculul care circula in fata sau in spatele lui nu a initiat o asemenea manevra.</p>
        <p>(3) Atunci cand prin manevra de depasire se trece peste axa care separa sensurile de circulatie, conducatorii de vehicule trebuie sa se asigure ca din sens opus nu se apropie un vehicul si ca dispun de spatiu suficient pentru a reintra pe banda initiala, unde au obligatia sa revina dupa efectuarea manevrei de depasire.</p>
        <p>(4) Nu constituie depasire, in sensul alin. (1), situatia in care un vehicul circula mai repede pe una dintre benzi decat vehiculele care circula pe alta banda in acelasi sens de circulatie.</p>
        <p>(5) Depasirea se efectueaza numai pe partea stanga a vehiculului depasit. Tramvaiul sau vehiculul al carui conducator a semnalizat intentia si s-a incadrat corespunzator parasirii sensului de mers spre stanga se depaseste prin partea dreapta.</p>
        <p>(6) Tramvaiul aflat in mers poate fi depasit si pe partea stanga atunci cand drumul este cu sens unic sau cand intre sina din dreapta si marginea trotuarului nu exista spatiu suficient.</p>
    </div>


    <button class="subcategorie">Articolul 46</button>
    <div class="articol_content">
        <p>Obligatiile conducatorilor vehiculelor care efectueaza depasirea si ale conducatorilor vehiculelor care sunt depasite, precum si cazurile in care depasirea este interzisa se stabilesc prin regulament.</p><p></p><p></p>
    </div>

</div>

<h2 class="text-center">SUBSECTIUNEA 4: Trecerea pe langa vehiculele care circula din sens opus</h2>

<div class="content">
    <button class="subcategorie">Articolul 47</button>
    <div class="articol_content">
         <p>Conducatorii vehiculelor care circula din sensuri opuse trebuie sa pastreze intre vehicule o distanta laterala suficienta si sa circule cat mai aproape de marginea din dreapta a benzii de circulatie respective.</p><p></p><p></p>
    </div>
</div>

<h2 class="text-center">SUBSECTIUNEA 5: Viteza si distanta dintre vehicule</h2>
<div class="content">
    <button class="subcategorie">Articolul 48</button>
    <div class="articol_content">
         <p>Conducatorul de vehicul trebuie sa respecte regimul legal de viteza si sa o adapteze in functie de conditiile de drum, astfel incat sa poata efectua orice manevra in conditii de siguranta.</p>
    </div>
    
  
    <button class="subcategorie">Articolul 49</button>
    <div class="articol_content">
        <p>(1) Limita maxima de viteza in localitati este de 50 km/h.</p>
        <p>(2) Pe anumite sectoare de drum din interiorul localitatilor, administratorul drumului poate stabili, pentru autovehiculele din categoriile A si B, si limite de viteza superioare, dar nu mai mult de 80 km/h. Limitele de viteza mai mari de 50 km/h se stabilesc numai cu avizul politiei rutiere.</p>
        <p>(3) Pe anumite sectoare de drum, tinand seama de imprejurari si de intensitatea circulatiei, administratorul drumului, cu avizul politiei rutiere, poate stabili si limite de viteza inferioare, dar nu mai putin de 10 km/h pentru tramvaie si de 30 km/h pentru toate autovehiculele.</p>
        <p>(4) Limitele maxime de viteza in afara localitatilor sunt:</p>
        <p>a)pe autostrazi - 130 km/h;</p>
        <p>b) pe drumurile expres sau pe cele nationale europene (E) - 100 km/h;</p>
        <p>c) pe celelalte categorii de drumuri - 90 km/h.</p>
    </div>


    <button class="subcategorie">Articolul 50</button>
    <div class="articol_content">
        <p>(1) Vitezele maxime admise in afara localitatilor pentru categoriile si subcategoriile de autovehicule prevazute la art. 15 alin. (2) sunt urmatoarele:</p>
        <p>a)130 km/h pe autostrazi, 100 km/h pe drumurile expres sau pe cele nationale europene (E) si 90 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile A si B;</p>
        <p>b) 110 km/h pe autostrazi, 90 km/h pe drumurile expres sau pe cele nationale europene (E) si 80 km/h pe celelalte categorii de drumuri, pentru autovehiculele din categoriile C, D si subcategoria D1;</p>
        <p>c) 90 km/h pe autostrazi, 80 km/h pe drumurile expres sau pe cele nationale europene (E) si 70 km/h pentru celelalte categorii de drumuri, pentru autovehiculele din subcategoriile A1, B1 si C1;</p>
        <p>d) 45 km/h, pentru tractoare si mopede.</p>
        <p>(2) Viteza maxima admisa in afara localitatilor pentru autovehiculele care tracteaza remorci sau semiremorci este cu 10 km/h mai mica decat viteza maxima admisa pentru categoria din care face parte autovehiculul tragator.</p>
        <p>(3) Viteza maxima admisa pentru autovehicule cu mase si/sau gabarite depasite ori care transporta produse periculoase este de 40 km/h in localitati, iar in afara localitatilor de 70 km/h.</p>
        <p>(4) Viteza maxima admisa in afara localitatilor pentru autovehiculele ai caror conducatori au mai putin de un an practica de conducere sau pentru persoanele care efectueaza pregatirea practica in vederea obtinerii permisului de conducere este cu 20 km/h mai mica decat viteza maxima admisa pentru categoria din care fac parte autovehiculele conduse.</p>
    </div>

 
    <button class="subcategorie">Articolul 51</button>
    <div class="articol_content">
        <p>Conducatorul unui vehicul care circula in spatele altuia are obligatia de a pastra o distanta suficienta fata de acesta, pentru evitarea coliziunii.</p>
    </div>


    <button class="subcategorie">Articolul 52</button>
    <div class="articol_content">
        <p>(1) Este interzisa desfasurarea de concursuri, antrenamente ori intreceri pe drumurile publice, cu exceptia celor autorizate de administratorul drumului respectiv si avizate de politia rutiera.</p>
        <p>(2) Organizatorii concursurilor, antrenamentelor ori intrecerilor autorizate sunt obligati sa ia toate masurile necesare pentru desfasurarea in siguranta a acestora, precum si pentru protectia celorlalti participanti la trafic.</p>
        <p>(3) In caz de producere a unui eveniment rutier, ca urmare a neindeplinirii atributiilor prevazute la alin. (2), organizatorii acestora raspund administrativ, contraventional, civil sau penal, dupa caz.</p>
    </div>


    <button class="subcategorie">Articolul 53</button>
    <div class="articol_content">
        <p>Autoritatile publice locale, cu autorizatia administratorului drumului public si cu avizul politiei rutiere sau la solicitarea acesteia, sunt obligate sa ia masuri pentru realizarea de amenajari rutiere destinate circulatiei pietonilor, biciclistilor, vehiculelor cu tractiune animala si calmarii traficului, semnalizate corespunzator, in apropierea unitatilor de invatamant, pietelor, targurilor, spitalelor, precum si in zonele cu risc sporit de accidente.</p><p></p><p></p>
</div>


</div>

<h2 class="text-center">SUBSECTIUNEA 6: Reguli referitoare la manevre</h2>
    
<div class="content">
<button class="subcategorie">Articolul 54</button>
<div class="articol_content">
        <p>(1) Conducatorul de vehicul care executa o manevra de schimbare a directiei de mers, de iesire dintr-un rand de vehicule stationate sau de intrare intr-un asemenea rand, de trecere pe o alta banda de circulatie sau de virare spre dreapta ori spre stanga sau care urmeaza sa efectueze o intoarcere ori sa mearga cu spatele este obligat sa semnalizeze din timp si sa se asigure ca o poate face fara sa perturbe circulatia sau sa puna in pericol siguranta celorlalti participanti la trafic.</p>
        <p>(2) Semnalizarea schimbarii directiei de mers trebuie sa fie mentinuta pe intreaga durata a manevrei.</p><p></p><p></p>
</div>
</div>

<h2 class="text-center">SUBSECTIUNEA 7: Intersectii si obligatia de a ceda trecerea</h2>

<div class="content">
<button class="subcategorie">Articolul 55</button>
<div class="articol_content">
        <p>Intersectiile sunt:</p>
        <p>a) cu circulatie nedirijata;</p>
        <p>b) cu circulatie dirijata. In aceasta categorie sunt incluse si intersectiile in care circulatia se desfasoara in sens giratoriu.</p>
    </div>

  
    <button class="subcategorie">Articolul 56</button>
    <div class="articol_content">
        <p>La apropierea de o intersectie conducatorul de vehicul trebuie sa circule cu o viteza care sa ii permita oprirea, pentru a acorda prioritate de trecere participantilor la trafic care au acest drept.</p>
    </div>

   
    <button class="subcategorie">Articolul 57</button>
    <div class="articol_content">
        <p>(1) La intersectiile cu circulatie nedirijata, conducatorul de vehicul este obligat sa cedeze trecerea vehiculelor care vin din partea dreapta, in conditiile stabilite prin regulament.</p>
        <p>(2) La intersectiile cu circulatie dirijata, conducatorul de vehicul este obligat sa respecte semnificatia indicatoarelor, culoarea semaforului sau indicatiile ori semnalele politistului rutier.</p>
        <p>(3) Patrunderea unui vehicul intr-o intersectie este interzisa daca prin aceasta se produce blocarea intersectiei.</p>
        <p>(4) In intersectiile cu sens giratoriu, semnalizate ca atare, vehiculele care circula in interiorul acestora au prioritate fata de cele care urmeaza sa patrunda in intersectie.</p>
    </div>


    <button class="subcategorie">Articolul 58</button>
    <div class="articol_content">
        <p>In cazul vehiculelor care patrund intr-o intersectie dintre un drum inchis circulatiei publice si un drum public, au prioritate acele vehicule care circula pe drumul public.</p>
    </div>


    <button class="subcategorie">Articolul 59</button>
    <div class="articol_content">
        <p>(1) In intersectiile cu circulatie nedirijata, conducatorul de vehicul este obligat sa acorde prioritate de trecere vehiculelor care circula pe sine. Acestea pierd prioritatea de trecere cand efectueaza virajul spre stanga sau cand semnalizarea rutiera din acea zona stabileste o alta regula de circulatie.</p>
        <p>(2) In intersectii, conducatorii vehiculelor care vireaza spre stanga sunt obligati sa acorde prioritate de trecere vehiculelor cu care se intersecteaza si care circula din partea dreapta.</p>
        <p>(3) In intersectiile cu circulatie dirijata prin indicatoare de prioritate, regula prioritatii de dreapta se respecta numai in cazul in care doua vehicule urmeaza sa se intalneasca, fiecare intrand in intersectie de pe un drum semnalizat cu un indicator avand aceeasi semnificatie de prioritate sau de pierdere a prioritatii.</p>
        <p>(4) Cand un semafor cu trei culori are o lumina verde intermitenta suplimentara, montata la acelasi nivel cu lumina verde normala a semaforului, sub forma unei sageti verzi pe fond negru, cu varful spre dreapta, aprinderea acesteia semnifica permisiunea pentru vehicule de a-si continua drumul in directia indicata de sageata, indiferent de culoarea semaforului electric, cu conditia acordarii prioritatii de trecere vehiculelor si pietonilor care au drept de circulatie.</p><p></p>
</div>

</div>


<h2 class="text-center">SUBSECTIUNEA 8: Trecerea la nivel cu calea ferata</h2>

<div class="content">
<button class="subcategorie">Articolul 60</button>
<div class="articol_content">
        <p>(1) Participantii la trafic trebuie sa dea dovada de prudenta sporita la apropierea si traversarea liniilor de cale ferata curenta sau industriala, dupa caz.</p>
        <p>(2) La trecerea la nivel cu o cale ferata curenta, prevazuta cu bariere sau semibariere, conducatorii de vehicule sunt obligati sa opreasca in dreptul indicatorului ce obliga la oprire, daca acestea sunt in curs de coborare ori in pozitie orizontala si/sau semnalele sonore si luminoase care anunta apropierea trenului sunt in functiune.</p>
        <p>(3) La trecerea la nivel cu o cale ferata industriala, semnalizata corespunzator, conducatorii de vehicule sunt obligati sa se conformeze semnificatiei semnalelor agentului de cale ferata.</p><p></p><p></p>
</div>
</div>


<h2 class="text-center">SUBSECTIUNEA 9: Autovehicule cu regim de circulatie prioritara</h2>

<div class="content">
<button class="subcategorie">Articolul 61</button>
<div class="articol_content">
        <p>(1) Au regim de circulatie prioritara numai autovehiculele prevazute la art. 32 alin. (2) lit. a) si b), atunci cand se deplaseaza in actiuni de interventie sau in misiuni care au caracter de urgenta. Pentru a avea prioritate de trecere, aceste autovehicule trebuie sa aiba in functiune semnalele luminoase si sonore.</p>
        <p>(2) Conducatorii autovehiculelor apartinand institutiilor prevazute la art. 32 alin. (2) lit. a) si b) pot incalca regimul legal de viteza sau alte reguli de circulatie, cu exceptia celor care reglementeaza trecerea la nivel cu calea ferata, atunci cand se deplaseaza in actiuni de interventie sau in misiuni care au caracter de urgenta.</p>
        <p>(3) Cand pe drumul public circulatia este dirijata de un politist rutier, conducatorii autovehiculelor prevazute la alin. (1) trebuie sa respecte semnalele, indicatiile si dispozitiile acestuia.</p>
    </div>

 
    <button class="subcategorie">Articolul 62</button>
    <div class="articol_content">
        <p>(1) La intrarea in intersectiile unde lumina rosie a semaforului este in functiune ori indicatoarele obliga la acordarea prioritatii de trecere, conducatorii autovehiculelor prevazute la art. 61 alin. (1) trebuie sa reduca viteza si sa circule cu atentie sporita pentru evitarea producerii unor accidente de circulatie, in caz contrar urmand sa raspunda potrivit legii.</p>
        <p>(2) Cand doua autovehicule cu regim de circulatie prioritara, care se deplaseaza in misiune avand semnalele luminoase si sonore in functiune, se apropie de o intersectie, venind din directii diferite, vehiculul care circula din partea dreapta are prioritate.</p><p></p><p></p>
    </div>

</div>

<h2 class="text-center">SUBSECTIUNEA 10: Oprirea, stationarea si parcarea</h2>

<div class="content">
<button class="subcategorie">Articolul 63</button>
<div class="articol_content">
        <p>(1) Se considera oprire imobilizarea voluntara a unui vehicul pe drumul public, pe o durata de cel mult 5 minute. Peste aceasta durata, imobilizarea se considera stationare.</p>
        <p>(2) Nu se considera oprire:</p>
        <p>a) imobilizarea vehiculului atat timp cat este necesara pentru imbarcarea sau debarcarea unor persoane, daca prin aceasta manevra nu a fost perturbata circulatia pe drumul public respectiv;</p>
        <p>b) imobilizarea autovehiculului avand o masa totala maxima autorizata de pana la 3,5 tone, atat timp cat este necesar pentru operatiunea de distribuire a marfurilor alimentare la unitatile comerciale.</p>
        <p>(3) Pentru autovehiculele care transporta marfuri, altele decat cele prevazute la alin. (2) lit. b), administratorul drumului public impreuna cu autoritatile administratiei publice locale, cu avizul politiei rutiere, vor stabili programe sau intervale orare pe timpul noptii, in care oprirea sau stationarea este permisa pentru distribuirea marfurilor.</p>
        <p>(4) Se considera parcare stationarea vehiculelor in spatii special amenajate sau stabilite si semnalizate corespunzator.</p>
        <p>(5) Vehiculul oprit sau stationat pe partea carosabila trebuie asezat langa si in paralel cu marginea acesteia, pe un singur rand, daca printr-un alt mijloc de semnalizare nu se dispune altfel. Motocicletele fara atas, mopedele si bicicletele pot fi oprite sau stationate si cate doua, una langa alta.</p>
    </div>
 
  
    <button class="subcategorie">Articolul 64</button>
    <div class="articol_content">
        <p>(1) Politia rutiera poate dispune ridicarea vehiculelor stationate neregulamentar pe partea carosabila. Ridicarea si depozitarea vehiculelor in locuri special amenajate se realizeaza de catre administratiile publice locale sau de catre administratorul drumului public, dupa caz.</p>
        <p>(2) Contravaloarea cheltuielilor pentru ridicarea, transportul si depozitarea vehiculului stationat neregulamentar se suporta de catre detinatorul acestuia.</p>
        <p>(3) Ridicarea vehiculelor dispusa de politia rutiera in conditiile prevazute la alin. (1) se realizeaza potrivit procedurii stabilite prin regulament.</p>
    </div>


    <button class="subcategorie">Articolul 65</button>
    <div class="articol_content">
        <p>Cazurile si conditiile in care oprirea, stationarea sau parcarea pe drumul public este permisa se stabilesc prin regulament, in conformitate cu prevederile prezentei ordonante de urgenta.</p><p></p><p></p>
    </div>
</div>

<h2 class="text-center">SUBSECTIUNEA 11: Circulatia vehiculelor destinate transportului de marfuri sau transportului public de persoane</h2>

<div class="content">
    <button class="subcategorie">Articolul 66</button>
    <div class="articol_content">
        <p>(1) Atestatul profesional este obligatoriu pentru conducatorul autovehiculului care efectueaza transport de marfuri periculoase, transport public de persoane, transport in cont propriu de persoane cu microbuze si autobuze, transporturi agabaritice, precum si pentru autovehiculele de transport marfa cu masa maxima autorizata mai mare de 3,5 tone, care circula in trafic intern si international.</p>
        <p>(2) Prevederile alin. (1) nu se aplica conducatorilor de autovehicule apartinand Ministerului Afacerilor Interne, Ministerului Apararii Nationale, Serviciului Roman de Informatii, Serviciului de Protectie si Paza si Administratiei Nationale a Penitenciarelor.</p>
        <p>(3) Conditiile de obtinere a certificatului de atestare profesionala se aproba prin ordin al ministrului transporturilor, constructiilor si turismului, in conformitate cu prevederile legale in vigoare.</p>
        <p>(4) Certificatul de atestare profesionala care confera titularului dreptul de a efectua activitatea pentru care a fost eliberat este valabil numai insotit de permisul de conducere corespunzator categoriei din care face parte vehiculul condus.</p>
    </div>

  
    <button class="subcategorie">Articolul 67</button>
    <div class="articol_content">
        <p>Se interzice transportul pe drumurile publice al marfurilor si produselor periculoase in vehicule care nu au dotarile si echipamentele necesare sau care nu indeplinesc conditiile tehnice si de agreere prevazute in Acordul european referitor la transportul rutier international al marfurilor periculoase (A.D.R.), incheiat la Geneva la 30 septembrie 1957, la care Romania a aderat prin Legea nr. 31/1994, ori pentru care conducatorul vehiculului nu detine certificat A.D.R. corespunzator.</p>
    </div>

  
    <button class="subcategorie">Articolul 68</button>
    <div class="articol_content">
        <p>(1) Autovehiculul care transporta marfuri sau produse periculoase poate circula pe drumurile publice numai in conditiile prevazute de reglementarile in vigoare.</p>
        <p>(2) Vehiculele care, prin constructie sau datorita incarcaturii transportate, depasesc masa si/sau gabaritul prevazute de normele legale pot circula pe drumul public numai pe traseele stabilite de administratorul drumului public sau, dupa caz, de autoritatile administratiei publice locale, cu respectarea prevederilor legale in vigoare.</p>
    </div>

   
    <button class="subcategorie">Articolul 69</button>
    <div class="articol_content">
        <p>Autovehiculele cu mase si/sau gabarite depasite, cele care transporta marfuri sau produse periculoase, precum si cele de insotire trebuie sa aiba montate semnalele speciale de avertizare cu lumina galbena, prevazute la art. 32 alin. (1) lit. c), iar conducatorii acestora trebuie sa le mentina in functiune pe toata perioada deplasarii pe drumul public.</p>
    </div>

</div>

<footer>
    <form action="../../Auth/recordProgressSections.php" method="post">
        <input type="text" id="sectiune" name="sectiune" value="s2">
        <button id="contor" >Sectiune parcursa</button>
    </form>
</footer>

<script src="../../CSS/expand_B.js"></script>

</body>
</html>