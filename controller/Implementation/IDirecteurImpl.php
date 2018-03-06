<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IDirecteur.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
/**
 * Description of IDirecteurImpl
 *
 * @author dii
 */
class IDirecteurImpl implements IDirecteur {
    public function Annuler($idContrat) {
        return $idContrat;
    }

    public function ListerContratAJour() {
        
    }

    public function ListerContratNonAJour() {
        
    }

    public function Valider($idContrat) {
        return $idContrat;
    }

}
