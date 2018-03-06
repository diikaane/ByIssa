<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IClient.php';
require dirname(__DIR__).'/service/IContrat.php';
require_once dirname(dirname(__DIR__)).'/model/DB.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
/**
 * Description of IClentImpl
 *
 * @author dii
 */
class IClientImpl implements IClient,  IContrat {
   

    public function Renouvellement($idContrat) {
        return $idContrat ;
    }

    public function ResilierContrat($idContart) {
        return $idContart;
    }

    public function Details($idContrat) {
        return $idContrat ;
    }

    public function Lister($idClient) {
        return $idClient;
    }

    public function Souscrire($contrat,$type) {
        return $contrat ;
    }

    public function Suivre($contrat) {
        return $contrat ;
    }

}
