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


    public function Renouvellement($idContrat,$newDate) {
      $db = new DB() ;
      $update = new Update();
      $update->from('contrat')->set('dateFinContrat',':dateFinContrat')->where('id',':id');
      $params = [
        'dateFinContrat'=>$newDate,
        'id'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }

    public function ResilierContrat($idContart) {
      $db = new DB() ;
      $update = new Update();
      $update->from('contrat')->set('dateFinEffective',':dateFinEffective')->where('id',':id');
      $params = [
        'dateFinEffective'=>now(),
        'id'=>$idContrat
      ];
      return $db->query($sql, $params, $class_name=null);
    }

    public function Details($idContrat) {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('contrat')->where('id',':id');
      $params= [
        'id'=>$idContrat
      ];
     return $db->query($sql, $params, 'Contrat');
    }

    public function Lister($idClient) {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('contrat')->where('idClient',':idClient');
      $params= [
        'id'=>$idClient
      ];
     return $db->query($sql, $params, 'Contrat');
    }

    public function Souscrire($contrat) {
      $db = new DB() ;
      $insert = new Insert();
      $insert->from('contrat')
      ->select('code','typeContrat','Client_idClient','dateDebutContrat')
      ->select('dateSoucription','dateFinContrat','dateFinEffective')
      ->params(':code',':typeContrat',':Client_idClient',':dateDebutContrat')
      ->params(':dateSoucription',':dateFinContrat',':dateFinEffective');
      $params = [
        'code'=>$contrat['code'],
        'typeContrat'=>$contrat['typeContrat'],
        'Client_idClient'=>$contrat['idClient'],
        'dateDebutContrat'=>$contrat['dateDebutContrat'],
        'dateSoucription'=>null,
        'dateFinContrat'=>$contrat['dateFinContrat'],
        'dateFinEffective'=>null
      ];
      $db->query($sql, $params, $class_name=null);
      return true;
    }

    public function Suivre($contrat) {
      $db = new DB() ;
      $update = new Update();
      $update->from('contrat')->set('suivre',':suivre')->where('id',':id');
      $params = [
        'suivre'=>1,
        'id'=>$contrat['id']
      ];
      return $db->query($sql, $params, $class_name=null);
    }

}
