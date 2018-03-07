<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IDirecteur.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/DB.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
require_once dirname(dirname(__DIR__)).'/entities/Contrat.php';
/**
 * Description of IDirecteurImpl
 *
 * @author dii
 */
class IDirecteurImpl implements IDirecteur {
    public function Annuler($idContrat) {
      $db = new DB() ;
      $update = new Update();
      $sql = $update->from('contrat')->set('dateFinEffective',':dateFinEffective')->where('idContrat',':idContrat');
      $params = [
        'dateFinEffective'=>date('Y-m-d '),
        'idContrat'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }

    public function ListerContratAJour() {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('contrat')->where('ContratAJour',':ContratAJour');
      $params= [
        'ContratAJour'=>1
      ];
     return $db->query($sql, $params, 'Contrat');
    }

    public function ListerContratNonAJour() {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('contrat')->where('ContratAJour',':ContratAJour');
      $params= [
        'ContratAJour'=>0
      ];
     return $db->query($sql, $params, 'Contrat');
    }

    public function Valider($idContrat) {
      $db = new DB() ;
      $update = new Update();
      $sql = $update->from('contrat')->set('ValiderContrat',':ValiderContrat')->where('idContrat',':idContrat');
      $params = [
        'ValiderContrat'=>1,
        'idContrat'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }

}
