<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Organisme
 *
 * @author dii
 */
class Organisme extends Client {
    /*
     * Declaration des Attributs 
     */
    
    protected  $libelle ;
    /*
     * Declarations des Getters et Setters 
     */
    function getLibelle() {
        return $this->libelle;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    /*
     * Definition des Constructeurs
     */
    function __construct() {
        parent::__construct();
        
    }

}
