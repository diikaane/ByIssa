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
    public function ContratAJour($Employe) {
      $db = new DB() ;
      $update = new Update();
      $update->from('contrat')->set('validerComptable',':validerComptable')->where('id',':id');
      $params = [
        'validerComptable'=>1,
        'id'=>$Employe['id']
      ];
      return $db->query($sql, $params, $class_name=null);
    }

    public function ContratNonAJour($idEmploye) {
        
    }

    public function VerifNumberBank($Contrat) {
      $db = new DB();
      $select = new Select();
      $sql = $select->from('client')->where('id',':id')->where('numeroBank != null');
      $params= [
        'id'=>$contrat['id']

      ];
     return $db->query($sql, $params, 'Employe');
    }

}
