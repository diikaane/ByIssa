<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IJuriste.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
/**
 * Description of IJuristeImpl
 *
 * @author dii
 */
class IJuristeImpl implements IJuriste{
    public function Lister($idEmployer) {
        return $idEmployer;
    }

    public function ReenvoyerContrat($idContrat) {
        return $idContrat;
    }

    public function ValiderContrat($idContrat) {
        return $idContrat;
    }

    public function VerifierContrat($idContrat) {
        return $idContrat;
    }
}
