<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            header('location:log_in.html');
        }else{echo $_SESSION['username']; }
        ?> TraST</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TraST, invata rutiera de acasa" />
    <meta name="keywords" content="TraST, semne de circulatie, teste auto" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="P.C.N" />
    <meta name="owner"  content="P.C.N" />
    <link rel="icon" href="pics/logo.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="CSS/web.css" />
    <script src="Auth/passValidator.js"></script>
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
    <ul class="Center" >
        <li class="Main">
            <a class="NavMain" data-ui-name="learn" >
                Imbogateste-ti cunostintele
            </a>
            <div id="dropdown" class="dropdown-content">
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
                <a class="NavMain_activ" data-ui-name="profile" href="Profile.php">
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


<div class ="nickname"> <h5>   <?php   echo $_SESSION['nickname']; ?></h5></div>
<?php

if(isset($_SESSION['log_message'])){ ?>
    <div id="message">   <?php   echo $_SESSION['log_message']; unset($_SESSION['log_message']); ?> </div>
    <?php
}?>

<div class="right-form">


    <h4 class="profile_h4">Profile Details</h4>

    <form class="profile_form" method="post" action="Auth/ProfileD.php">
        <div class="profile_p">
            <h3>First name:</h3>
            <label>
                <input class="input" type="text" placeholder="firstName" name="firstName" value=<?php echo $_SESSION['first_name'];?>  >
            </label>
        </div>
        <div class="profile_p">
            <h3>Last name:</h3>
            <label>
                <input class="input" type="text" placeholder="lastName" name="lastName" value= <?php echo $_SESSION['last_name'];?> >
            </label>
        </div>
        <div class="profile_p">
            <h3>Nickname:</h3>
            <label>
                <input class="input" type="text" placeholder="nickname" name="nickname" value=<?php echo $_SESSION['nickname'];?> >
            </label>
        </div>
        <div class="profile_p">
            <h3>Hobby:</h3>
            <label>
                <input class="input" type="text" placeholder="hobby" name="hobby" value=<?php echo $_SESSION['hobbys'];?> >
            </label>
        </div>
        <div class="profile_p">
            <h3>Age:</h3>
            <label>
                <input class="input" type="text" placeholder="age" name="age" value=<?php echo $_SESSION['age'];?> >
            </label>
        </div>
        <button class="Profile">Submit</button>

    </form>
</div>
<div class="left-form-top">
    <h4 class="profile_h4">Password Changes</h4>

    <form class="profile_form" method="post" action="Auth/ProfilePassChange.php">
        <div class="profile_p">
            <h3>Password:</h3>
            <label>
                <input class="input" type="password" placeholder="pass" name="pass" >
            </label>
        </div>
        <div class="profile_p">
            <h3>New password:</h3>
            <label>
                <input  id="pass" class="input" type="password" placeholder="new_pass" name="new_pass" onkeyup='checkPass();' >
            </label>
        </div>
        <div class="profile_p">
            <h3>Confirm password:</h3>
            <label>
                <input  id="c_pass"  class="input" type="password" placeholder="confirm_pass" name="c_pass" onkeyup='checkPass();' >
            </label>
        </div>
        <div class="profile_p">
            <h3>Mail:</h3>
            <label>
                <input class="input" type="text" placeholder="e-mail" name="e-mail" >
            </label>
        </div>
        <span id="validation_message"></span>
        <button class="Profile">Submit</button>
    </form>

</div>

<div class="left-form-bottom">
    <h4 class="profile_h4">Email Settings</h4>

    <form class="profile_form" method="post" action="Auth/ProfileEmailChange.php">
        <div class="profile_p">
            <h3> Mail:</h3>
            <label>
                <input class="input" type="text" placeholder="e-mail" name="e-mail" >
            </label>
        </div>
        <div class="profile_p">
            <h3>Password:</h3>
            <label>
                <input class="input" type="password" placeholder="pass" name="pass" >
            </label>
        </div>
        <div class="profile_p">
            <h3>New mail:</h3>
            <label>
                <input class="input" type="text" placeholder="new_email" name="new_email" >
            </label>
        </div>
        <button class="Profile">Submit</button>
    </form>
</div>


<div class="Semne_Circulatie">

    <table>
        <tr>
            <th>Categorie</th>
            <th>Completat</th>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de avertizare</td>
            <td class="table_col"><?php echo( $_SESSION['Indicatoare de avertizare']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de informare</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de informare']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de interzicere sau restrictie</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de interzicere sau restrictie']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Panouri aditionale</td>
            <td class="table_col"><?php echo($_SESSION['Panouri aditionale']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de informare turistica</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de informare turistica']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de obligare</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de obligare']); ?></td>
        </tr>

        <tr class="hovering">
            <td class="table_cat">Indicatoare de orientare</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de orientare']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de prioritate</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare de prioritate']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Semnale luminoase</td>
            <td class="table_col"><?php echo($_SESSION['Semnale luminoase']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de instalate la trecerea cu calea ferata</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare instalate la trecerea cu calea ferata']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare kilometrice</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare kilometrice']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare rutiere temporare</td>
            <td class="table_col"><?php echo($_SESSION['Indicatoare rutiere temporare']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Mijloace auxiliare de semnalizare a lucrărilor</td>
            <td class="table_col"><?php echo($_SESSION['Mijloace auxiliare de semnalizare a lucrărilor']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Marcaje longitudinale</td>
            <td class="table_col"><?php echo($_SESSION['Marcaje longitudinale']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Marcaje transversale</td>
            <td class="table_col"><?php echo($_SESSION['Marcaje transversale']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Marcaje diverse</td>
            <td class="table_col"><?php echo($_SESSION['Marcaje diverse']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Marcaje laterale</td>
            <td class="table_col"><?php echo($_SESSION['Marcaje laterale']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Semnalele polițistului rutier</td>
            <td class="table_col"><?php echo($_SESSION['Semnalele polițistului rutier']); ?></td>
        </tr>
    </table>
</div>



<div class="Reguli_Circulatie">

    <table>
        <tr>
            <th>Categorie</th>
            <th>Completat</th>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de avertizare</td>
            <td class="table_col"><?php echo( $_SESSION['s1']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de informare</td>
            <td class="table_col"><?php echo($_SESSION['s2']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de interzicere sau restrictie</td>
            <td class="table_col"><?php echo($_SESSION['s3']); ?></td>

        </tr>
        <tr class="hovering">
            <td class="table_cat">Panouri aditionale</td>
            <td class="table_col"><?php echo($_SESSION['s4']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de informare turistica</td>
            <td class="table_col"><?php echo($_SESSION['s5']); ?></td>
        </tr>
        <tr class="hovering">
            <td class="table_cat">Indicatoare de obligare</td>
            <td class="table_col"><?php echo($_SESSION['s6']); ?></td>
        </tr>

    </table>
</div>


</body>
</html>