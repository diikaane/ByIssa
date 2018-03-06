<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Particulier
 *
 * @author dii
 */
class Particulier extends Client{
    /*
     * Definiion des Attributs
     */
    protected  $nom ;
    protected  $prenom ;
    /*
     * Definition des Getters et Setters
     */
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    /*
     * Definition du Constructeur sans Arguments
     */
    function __construct() {
        parent::__construct();        
    }

}
