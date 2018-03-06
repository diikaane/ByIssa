<?php


/**
 * Description of Document
 *
 * @author dii
 */
class Document {
    /*
     * Definiton des Atributs
     */
    private $id ;
    private $type ;
    private $url ;
    private $Contrat ;
    /*
     * Definition des Getters et des Setters
     */
    function getId() {
        return $this->id;
    }

    function getType() {
        return $this->type;
    }

    function getUrl() {
        return $this->url;
    }

    function getContrat() {
        return $this->Contrat;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setContrat($Contrat) {
        $this->Contrat = $Contrat;
    }
    /*
     * Definition des Construteurs
     */
    
    function __construct() {
        
    }

    

}
