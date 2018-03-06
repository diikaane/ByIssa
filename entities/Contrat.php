<?php



/**
 * Description of Contrat
 *
 * @author dii
 */
class Contrat {
    /*
     * Definition des Attributs 
     */
    private $id ;
    private $code ;
    private $dateSouscription ;
    private $dateDebutContrat ;
    private $datefinContrat;
    private $datefinEffective = null ;
    private $client ;
    private $comptable ;
    private $juriste ;
    
    /*
     * Definition des Getters et des Setters 
     */
    function getId() {
        return $this->id;
    }

    function getCode() {
        return $this->code;
    }

    function getDateSouscription() {
        return $this->dateSouscription;
    }

    function getDateDebutContrat() {
        return $this->dateDebutContrat;
    }

    function getDatefinContrat() {
        return $this->datefinContrat;
    }

    function getDatefinEffective() {
        return $this->datefinEffective;
    }

    function getClient() {
        return $this->client;
    }

    function getComptable() {
        return $this->comptable;
    }

    function getJuriste() {
        return $this->juriste;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setDateSouscription($dateSouscription) {
        $this->dateSouscription = $dateSouscription;
    }

    function setDateDebutContrat($dateDebutContrat) {
        $this->dateDebutContrat = $dateDebutContrat;
    }

    function setDatefinContrat($datefinContrat) {
        $this->datefinContrat = $datefinContrat;
    }

    function setDatefinEffective($datefinEffective) {
        $this->datefinEffective = $datefinEffective;
    }

    function setClient($client) {
        $this->client = $client;
    }

    function setComptable($comptable) {
        $this->comptable = $comptable;
    }

    function setJuriste($juriste) {
        $this->juriste = $juriste;
    }
    /*
     * Definition du Constructeur sans Arguments
     */
    function __construct() {
        
    }


    
}
