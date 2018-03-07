<?php

require_once dirname(dirname(dirname(__DIR__))).'/controller/Implementation/IJuristeImpl.php';

    $juriste = new IJuristeImpl();
    $data = $juriste->VerifierContrat($_POST['id']);

    if( $data== 1 ) {
      echo "Verification reussis";
    }



 ?>
