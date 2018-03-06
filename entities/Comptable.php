<?php


require_once 'Employe.php';
/**
 * Description of Comptable
 *
 * @author dii
 */
class Comptable extends Employe {
    protected $matricule ;
    protected $idAdministrateur;
    function getMatricule() {
        return $this->matricule;
    }

    function getAdministrateur() {
        return $this->Administrateur;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setAdministrateur($Administrateur) {
        $this->Administrateur = $Administrateur;
    }

    
}
