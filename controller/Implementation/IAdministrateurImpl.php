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
    
    public function Ajouter($Employe) {
        $db = new DB() ; 
        $insert = new Insert();
        if(is_a($Employe, 'Comptable')) {
            $sql = $insert->from('comptable')
                    ->select('nom','prenom','telephone','login','password','email')
                    ->select('adresse','compteBank','idAdministrateur','matricule')
                    ->param(':nom',':prenom',':telephone',':login',':password',':email')
                    ->param(':adresse',':compteBank',':idAdministrateur',':matricule');
            
            $params = [
                'nom' =>$Employe->getNom(),
                'prenom'=>$Employe->getPrenom(),
                'telephone'=>$Employe->getTelephone(),
                'login'=>$Employe->getLogin(),
                'password'=>$Employe->getPassword(),
                'email'=>$Employe->getEmail(),
                'adresse'=>$Employe->getAdresse(),
                'compteBank'=>$Employe->getCompteBank(),
                'idAdministrateur'=>$Employe->getAdministrateur(),
                'matricule'=>$Employe->getMatricule()
            ];
             $db->query($sql, $params, $class_name=null);
             return true;
        }elseif(is_a($Employe, 'Directeur')) {
            $sql = $insert->from('directeur')
                    ->select('nom','prenom','telephone','login','password','email')
                    ->select('adresse','compteBank','idAdministrateur','matricule')
                    ->param(':nom',':prenom',':telephone',':login',':password',':email')
                    ->param(':adresse',':compteBank',':idAdministrateur',':matricule');
            
            $params = [
                'nom' =>$Employe->getNom(),
                'prenom'=>$Employe->getPrenom(),
                'telephone'=>$Employe->getTelephone(),
                'login'=>$Employe->getLogin(),
                'password'=>$Employe->getPassword(),
                'email'=>$Employe->getEmail(),
                'adresse'=>$Employe->getAdresse(),
                'compteBank'=>$Employe->getCompteBank(),
                'idAdministrateur'=>$Employe->getAdministrateur(),
                'matricule'=>$Employe->getMatricule()
            ];
             $db->query($sql, $params, $class_name=null);
            return true;
        }elseif(is_a($Employe, 'Juriste')) {
            $sql = $insert->from('juriste')
                    ->select('nom','prenom','telephone','login','password','email')
                    ->select('adresse','compteBank','idAdministrateur','matricule')
                    ->param(':nom',':prenom',':telephone',':login',':password',':email')
                    ->param(':adresse',':compteBank',':idAdministrateur',':matricule');
            
            $params = [
                'nom' =>$Employe->getNom(),
                'prenom'=>$Employe->getPrenom(),
                'telephone'=>$Employe->getTelephone(),
                'login'=>$Employe->getLogin(),
                'password'=>$Employe->getPassword(),
                'email'=>$Employe->getEmail(),
                'adresse'=>$Employe->getAdresse(),
                'compteBank'=>$Employe->getCompteBank(),
                'idAdministrateur'=>$Employe->getAdministrateur(),
                'matricule'=>$Employe->getMatricule()
            ];
             $db->query($sql, $params, $class_name=null);
            return true;
        }
        return false;
    }

    public function Lister() {
        $db = new DB();
        $select = new Select();
        $sql = $select->from('comptable');
       return $db->query($sql, $params=null, 'Comptable');
        
    }

    public function Update($Employe) {
        $db = new DB() ; 
        $update = new Update();
        if(is_a($Employe, 'Comptable')) {
            $sql= $update->from('comptable')
                    ->select('nom','prenom')
                    ->set('nom', ':nom')
                    ->set('prenom', ':prenom')
                    ->where('id = :id') ;
            $params = [
                'nom' =>'papa',
                'prenom'=>'laye',
                'id'=>2
            ];
            $db->query($sql, $params);
             return true;
        
        }  elseif(is_a($Employe, 'Directeur')) {
            $sql= $update->from('directeur')
                    ->select('nom','prenom')
                    ->set('nom', ':nom')
                    ->set('prenom', ':prenom')
                    ->where('id = :id') ;
            $params = [
                'nom' =>'papa',
                'prenom'=>'laye',
                'id'=>2
            ];
            $db->query($sql, $params);
             return true;
        }  elseif(is_a($Employe, 'Juriste')) {
            $sql= $update->from('juriste')
                    ->select('nom','prenom')
                    ->set('nom', ':nom')
                    ->set('prenom', ':prenom')
                    ->where('id = :id') ;
            $params = [
                'nom' =>'papa',
                'prenom'=>'laye',
                'id'=>2
            ];
            $db->query($sql, $params);
             return true;
        }
    }
    public  static $i = 0 ;
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
               $id =  $value->getId() ;
               $user = $value->getPrenom();
           }
        return $this->rendre('pages.login',  compact('user','id'));
       }  else {
           
            return  $erreur = 'Erreur de Saisie Login ou Mot de Passe incorect';
       }
       
       
    }
    public function home() {
        $this->rendre('pages.connect');
    }
    public function deconnection () {
        $this->rendre('pages.deconnection');
    }

}
