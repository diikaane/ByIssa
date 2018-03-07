<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__DIR__).'/service/IService.php';
require_once dirname(__DIR__).'/Controller.php';
require_once dirname(__DIR__).'/service/IAdministrateur.php';
require_once  dirname(dirname(__DIR__)).'/model/DB.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Insert.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Select.php';
require_once dirname(dirname(__DIR__)).'/model/Query/Update.php';
require_once dirname(dirname(__DIR__)).'/entities/Comptable.php';
require_once dirname(dirname(__DIR__)).'/entities/Administrateur.php';
/**
 * Description of IAdministrateurImpl
 *
 * @author dii
 */
class IAdministrateurImpl extends Controller implements IAdministrateur,  IService{
    private $id;
    private $profile;
    private $user ;
    public function Ajouter($Employe) {
        $db = new DB() ;
        $insert = new Insert();

            $sql = $insert->from('employe')
                    ->select('nom','prenom','telephone','login','password','email')
                    ->select('adresse','compteBank','idAdministrateur','matricule','type')
                    ->param(':nom',':prenom',':telephone',':login',':password',':email')
                    ->param(':adresse',':compteBank',':idAdministrateur',':matricule',':type');

            $params = [
                'nom' =>$Employe['nom'],
                'prenom'=>$Employe['prenom'],
                'telephone'=>$Employe['telephone'],
                'login'=>$Employe['login'],
                'password'=>$Employe['password'],
                'email'=>$Employe['email'],
                'adresse'=>$Employe['adresse'],
                'compteBank'=>$Employe['compteBank'],
                'idAdministrateur'=>$Employe['idAdministrateur'],
                'matricule'=>$Employe['matricule'],
                'type'=>$Employe['type']
            ];
             $db->query($sql, $params, $class_name=null);
        return true;
    }

    public function Lister() {
        $db = new DB();
        $select = new Select();
        $sql = $select->from('employe');
       return $db->query($sql, $params=null, 'Employe');

    }

    public function Update($Employe) {
      $Employe = new Employe();
        $db = new DB() ;
        $update = new Update();

            $sql= $update->from('Employe')
                    ->set('nom', ':nom')
                    ->set('telephone', ':telephone')
                    ->set('login', ':login')
                    ->set('password', ':password')
                    ->set('email', ':email')
                    ->set('adresse', ':adresse')
                    ->set('compteBank', ':compteBank')
                    ->set('idAdministrateur', ':idAdministrateur')
                    ->set('matricule', ':matricule')
                    ->set('type', ':type')
                    ->set('prenom', ':prenom')
                    ->where('id = :id') ;
            $params = [
              'nom' =>$Employe['nom'],
              'prenom'=>$Employe['prenom'],
              'telephone'=>$Employe['telephone'],
              'login'=>$Employe['login'],
              'password'=>$Employe['password'],
              'email'=>$Employe['email'],
              'adresse'=>$Employe['adresse'],
              'compteBank'=>$Employe['compteBank'],
              'idAdministrateur'=>$Employe['idAdministrateur'],
              'matricule'=>$Employe['matricule'],
              'type'=>$Employe['type']
            ];
             $db->query($sql, $params, $class_name=null);
             return true;
        }
    public function Authentifier($login, $password) {
        $db = new DB();
        $select = new Select();
        $sql = $select->from('employe')->where('login = :login ','password = :password');
        $params = [
            'login'=>$login ? $login : 'null',
            'password'=>$password ? $password : 'null'
        ];
       $datas = $db->query($sql, $params, 'Administrateur');
       if(count($datas)!=0) {
           foreach ($datas as $value) {
               $this->id =  $value->getId() ;
               $this->user = $value->getPrenom();
               $this->profile = $value->getType();
           }
           $this->login();
          //$this->rendre('pages.login',  compact('user','id','profile'));
       }  else {
              return $erreur = 'Erreur de Saisie Login ou Mot de Passe incorect';
              $this->home();
       }


    }
    public function home() {
        $this->rendre('pages.connect');
    }
    public function deconnection () {
        $this->rendre('pages.deconnection');
    }
    public function login () {
      echo "string";
      $user = $this->user;
      $id=$this->id;
      $profile = $this->profile ;
        $this->rendre('pages.login',compact('user','id','profile'));
        die();
    }
}
