<?php
require_once dirname(__DIR__).'/controller/Implementation/IAdministrateurImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IClientImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IComptableImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IDirecteurImpl.php';
require_once dirname(__DIR__).'/controller/Implementation/IJuristeImpl.php';
require_once dirname(__DIR__).'/entities/Comptable.php';

/*
 * 


$db = new DB();

//$res=$db->query("SELECT * FROM comptable WHERE id = :id ",  ['id' => 1],'Comptable');


print_r($res);die();



$administrateur = new IAdministrateurImpl();
$comptable = new Comptable();
$comptable->setNom('Kane');
$comptable->setPrenom('Moussa');
$comptable->setTelephone('451365');
$comptable->setMatricule('matcom2');
$comptable->setLogin('Bvndit');
$comptable->setPassword('passe');
$comptable->setEmail('moussakane.com');
$comptable->setAdresse('Rufisque');
$comptable->setCompteBank('78-985-452');
$comptable->setAdministrateur(1);
$var = $administrateur->Authentifier('fatou','passe');


if($var) {
    echo 'Bravoo vous etes connecter';
}else {
    echo 'Va chier';
}
 */

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
	}elseif($p==='connect'){
            $administrateur->home();
        }elseif($p ==='deconnection'){
            $administrateur->deconnection();
        }
            
	
	