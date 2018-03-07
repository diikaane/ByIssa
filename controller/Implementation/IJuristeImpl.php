<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/IJuriste.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/DB.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
require_once dirname(dirname(__DIR__)).'/entities/Contrat.php';
/**
 * Description of IJuristeImpl
 *
 * @author dii
 */
class IJuristeImpl implements IJuriste{
    public function Lister($Employer) {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('contrat')->where('idContrat',':idContrat');
      $params= [
        'idContrat'=>$Employer['id']
      ];
     return $db->query($sql, $params, 'Contrat');
    }

    public function ReenvoyerContrat($idContrat) {
        return $idContrat;
    }

    public function ValiderContrat($idContrat) {
      $db = new DB() ;
      $update = new Update();
      $sql = $update->from('contrat')->set('validerJuriste',':validerJuriste')->where('idContrat',':idContrat');
      $params = [
        'validerJuriste'=>1,
        'idContrat'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }

    public function VerifierContrat($idContrat) {
      $db = new DB() ;
      $update = new Update();
      $sql = $update->from('contrat')->set('suivreContrat',':suivreContrat')->where('idContrat',':idContrat');
      $params = [
        'suivreContrat'=>1,
        'idContrat'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }
}
