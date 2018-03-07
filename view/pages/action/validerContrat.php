<?php

require_once dirname(dirname(dirname(__DIR__))).'/controller/Implementation/IJuristeImpl.php';

    $juriste = new IJuristeImpl();
    $data = $juriste->ValiderContrat($_POST['id']);

    if($data== 1 ) {
      echo "Validation Reussi";
    }



 ?>
