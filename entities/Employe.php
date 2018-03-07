<?php

require_once 'Client.php';

/**
 * Description of User
 *
 * @author dii
 */
abstract class Employe extends Client {
    /*
     * Declaration des Attributs
     */
    protected  $matricule ;
    protected $type ;
    /*
     * Definiton des Getters et Setters
     */
    function getMatricule() {
        return $this->matricule;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }
    function getType() {
       return $this->type ;
    }
    function setType($type) {
      $this->type = $type ;
    }
    /*
     * Definitions du Constructeur sans Arguments
     */
    function __construct() {
        parent::__construct();

    }


}
