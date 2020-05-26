<!DOCTYPE html>
<html lang ="RO">
<head>
    <title>@accname TraST</title>
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
    if(!isset($_SESSION['username'])){
        header('location:log_in.html');
    }
    else
    {
        ?>
        <ul class="Right" >
            <li class="Main">
                <a class="NavMain_activ" data-ui-name="profile" href="Profile.php">
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


<div class ="nickname"> <h5><?php   echo $_SESSION['nickname']; ?></h5></div>

<div class="right-form">


    <h4 class="profile_h4">Profile Details</h4>

    <form class="profile_form" method="post" action="Auth/ProfileD.php">
        <p class="profile_p">
            <h3>First name:</h3>
            <input class="input" type="text" placeholder="firstName" name="firstName" value=<?php echo $_SESSION['first_name'];?>  required>
        </p>
        <p class="profile_p">
            <h3>Last name:</h3>
            <input class="input" type="text" placeholder="lastName" name="lastName" value= <?php echo $_SESSION['last_name'];?> required>

        </p>
        <p class="profile_p">
            <h3>Nickname:</h3>
            <input class="input" type="text" placeholder="nickname" name="nickname" value=<?php echo $_SESSION['nickname'];?> required>

        </p>
        <p class="profile_p">
            <h3>Hobby:</h3>
            <input class="input" type="text" placeholder="hobby" name="hobby" value=<?php echo $_SESSION['hobbys'];?> required>
        </p>

        <p class="profile_p">
            <h3>Age:</h3>
            <input class="input" type="text" placeholder="age" name="age" value=<?php echo $_SESSION['age'];?> required>
        </p>
        <button class="Profile">Submit</button>

    </form>
</div>
<div class="left-form-top">
    <h4 class="profile_h4">Password Changes</h4>

    <form class="profile_form" method="post" action="Auth/ProfilePassChange.php">
        <p class="profile_p">
            <h3>Password:</h3>
            <input class="input" type="text" placeholder="pass" name="pass" required>
        </p>
        <p class="profile_p">
            <h3>New password:</h3>
            <input class="input" type="text" placeholder="new_pass" name="new_pass" required>
        </p>
        <p class="profile_p">
        <h3>Mail:</h3>
        <input class="input" type="text" placeholder="e-mail" name="e-mail" required>

        </p>
        <button class="Profile">Submit</button>
    </form>

</div>

<div class="left-form-bottom">
    <h4 class="profile_h4">Email Settings</h4>

    <form class="profile_form" method="post" action="Auth/ProfileEmailChange.php">
        <p class="profile_p">
            <h3> Mail:</h3>
            <input class="input" type="text" placeholder="e-mail" name="e-mail" required>
        </p>
        <p class="profile_p">
            <h3>Password:</h3>
            <input class="input" type="text" placeholder="pass" name="pass" required>
        </p>
        <p class="profile_p">
            <h3>New mail:</h3>
            <input class="input" type="text" placeholder="new_mail" name="new_mail" required>
        </p>
        <button class="Profile">Submit</button>
    </form>
</div>

</body>
</html>