<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>TraST</title>
    <meta charset="utf-8" />
    <meta name="description" content="TraST, invata rutiera de acasa" />
    <meta name="keywords" content="TraST, semne de circulatie, teste auto" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="P.C.N" />
    <meta name="owner"  content="P.C.N" />
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
            <a class="NavMain" data-ui-name="learn" href="Learn/semne_circulatie.html">
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
                <a href="Learn/learn1.html">Reg de circulatie</a>
                <a href="Learn/semne_circulatie.html">Semne de circulatie</a>
            </div>
        </li>

        <li class="Main">
            <a class="NavMain" data-ui-name="teste" href="test.html">
                Testeaza-ti cunostintele
            </a>
        </li>
    </ul>


    <?php
        session_start();
     if(!isset($_SESSION['nickname'])){
    ?>
    <ul class="Right" >
        <li class="Main">
            <a class="NavMain" data-ui-name="Log in" href="log_in.html">
                Log in
            </a>
        </li>
        <li class="Main">
            <a class="NavMain" data-ui-name="Sign up" href="sign_up.html">
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
                <?php   echo $_SESSION['nickname']; ?>
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

<table>
    <tr>
        <th>Pozitie</th>
        <th>Nume</th>
        <th>Categorii parcurse</th>
        <th>Punctaj</th>
    </tr>
    <tr class="hovering">
        <td>#1</td>
        <td>Maya</td>
        <td>2</td>
        <td>50</td>
    </tr>
    <tr class="hovering">
        <td>#2</td>
        <td>Alex</td>
        <td>2</td>
        <td>43</td>
    </tr>
    <tr class="hovering">
        <td>#3</td>
        <td>Jack</td>
        <td>3</td>
        <td>18</td>
    </tr>
    <tr class="hovering">
        <td>#4</td>
        <td>Samanta</td>
        <td>1</td>
        <td>10</td>
    </tr>
</table>

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
        <a href="learn.html" class="See_more">
            More
        </a>
    </div>
</section>

<section class="Learn&study">
    <div class="Study">
        <a class="Study1" href="">
            <div>
                <img src="pics/LOGO1.png" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Study</h5>
            </div>
        </a>
        <a class="Study2" href="">
            <div>
                <img src="pics/LOGO1.png" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Study</h5>
            </div>
        </a>
        <a class="Study3" href="">
            <div>
                <img src="pics/LOGO1.png" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Study</h5>
            </div>
        </a>
        <a class="Study4" href="">
            <div>
                <img src="pics/LOGO1.png" alt="learns" class="sign_image">
            </div>
            <div>
                <h5>Study</h5>
            </div>
        </a>

    </div>

    <div class="More">
        <a href="learn.html" class="See_more">
            More
        </a>
    </div>
</section>




</body>
</html>