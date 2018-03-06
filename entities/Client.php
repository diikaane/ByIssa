<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author dii
 */
abstract class Client {
    /*
     * Definition des Attribut 
     */
    
    protected $id ; 
    protected $telephone ;
    protected $email ;
    protected $nom;
    protected $prenom ;
    protected $login ;
    protected $password ;
    protected $adresse ;
    protected  $compteBank = null ;
    /*
     * Definition des Methodes Getters et Setters 
     */
    function getId() {
        return $this->id;
    }
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

        function getAdresse() {
        return $this->adresse;
    }
    function getCompteBank() {
        return $this->compteBank;
    }

    function setCompteBank($compteBank) {
        $this->compteBank = $compteBank;
    }

        function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

        function getTelephone() {
        return $this->telephone;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    /*
     * Definition du Contucteur Sans Arguments 
     */
    function __construct() {
        
    }
    

    
}
