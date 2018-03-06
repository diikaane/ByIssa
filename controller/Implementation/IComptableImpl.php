<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IComptable.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
/**
 * Description of IComptableImpl
 *
 * @author dii
 */
class IComptableImpl implements IComptable {
    public function ContratAJour($idEmploye) {
        return $idEmploye;
    }

    public function ContratNonAJour($idEmploye) {
        return $idEmploye;
    }

    public function VerifNumberBank($idContrat) {
        return $idContrat ;
    }

}
