<?php
require_once dirname(__DIR__).'/controller/Implementation/IAdministrateurImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IClientImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IComptableImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IDirecteurImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IJuristeImpl.php';
require_once dirname(__DIR__).'/entities/Comptable.php';


require_once dirname(__DIR__).'\controller\Controller.php';

	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}
	else {
		$p = 'connect' ;
	}
        $administrateur = new IAdministrateurImpl();
	if( $p === 'login') {
		$administrateur->Authentifier(null, null);
	}elseif($p ==='connect'){
            $administrateur->home();
  }elseif($p ==='deconnection'){
      $administrateur->deconnection();
} elseif($p ==='test'){
		echo "test";
}
