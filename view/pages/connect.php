<?php

session_start();
require_once dirname(dirname(__DIR__)).'/controller/Implementation/IAdministrateurImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IClientImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IComptableImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IDirecteurImpl.php';
    require_once dirname(dirname(__DIR__)).'/controller/Implementation/IJuristeImpl.php';
    if(isset($_POST['submit'])) {
        $administrateur = new IAdministrateurImpl();
        $erreur = $administrateur->Authentifier($_POST['login'],$_POST['password']);
    }

?>
<html>
    <head>
        <title> Binevenue </title>
    </head>
    <body>
        <?php
            if(!empty($erreur)) echo $erreur ;     ?>
        <form action="" method="POST">
            <p><input type="text" name="login" placeholder="Enter Votre Login "></p>
            <p><input type="password" name="password" placeholder="Enter Votre Password "></p>
            <p><input type="submit" name="submit" ></p>
        </form>
        
    </body>
</html>
