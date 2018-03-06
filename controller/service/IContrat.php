<?php

/**
 *
 * @author dii
 */
interface IContrat {
    /*
     * @param Object Contrat
     * @params type de Contrat String
     * @return Boolean 
     */
    public function  Souscrire($contrat,$type);
    /*
     * @param Object Contrat
     * @return Object Contrat
     */
    public function  Suivre($contrat) ;
    /*
     * @param int
     * @return Tableau de Contrats
     */
    public function Lister($idClient) ;
    /*
     * @param int
     * @return Object Contrat
     */
    public function Details($idContrat) ; 
    
}
