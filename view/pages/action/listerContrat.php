<?php
require_once dirname(dirname(dirname(__DIR__))).'/controller/Implementation/IJuristeImpl.php';

    $juriste = new IJuristeImpl();
    $data = $juriste->Lister($_POST);
    if(count($data)!=0) {
      echo "<ul>";
       foreach ($data as  $value) {
         echo "<li>". "  " . $value->getCode() . "</li>";
         echo "<li>". "    " . $value->getDateDebutContrat() . "</li>";
         echo "<li>". " " . $value->getDateSouscription() . "</li>";
      echo "</ul>";
    }
  }else {
      echo "rien a afficher";
    }



 ?>
