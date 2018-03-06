<?php
    session_start();
    $_SESSION['login'] = $user ;
    $_SESSION['id'] = $id ;
    echo 'Bienvenue Mr ' .$_SESSION['login'] ;
?>

<p><a href="deconnection" >Deconnection</a></p>

<?php
die();
?>