<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require dirname(__DIR__).'/service/I_Internaute.php';
require_once dirname(dirname(__DIR__)).'/model/DbConnector.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
/**
 * Description of IInternauteImpl
 *
 * @author dii
 */
class IInternauteImpl implements I_Internaute {
    public function Inscrire($Employe) {
      $db = new DB() ;
      $insert = new Insert();

          $sql = $insert->from('employe')
                  ->select('nom','prenom','telephone','login','password','email')
                  ->select('adresse','compteBank','type')
                  ->param(':nom',':prenom',':telephone',':login',':password',':email')
                  ->param(':adresse',':compteBank',':type');

          $params = [
              'nom' =>$Employe['nom'],
              'prenom'=>$Employe['prenom'],
              'telephone'=>$Employe['telephone'],
              'login'=>$Employe->['login'],
              'password'=>$Employe['password'],
              'email'=>$Employe['email'],
              'adresse'=>$Employe['adresse'],
              'compteBank'=>$Employe['compteBank'],
              'type'=>$Employe['type']
          ];
           $db->query($sql, $params, $class_name=null);
      return true;
    }

    public function ListerType() {

    }

//put your code here
}
