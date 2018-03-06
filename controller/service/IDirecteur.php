<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author dii
 */
interface IDirecteur {
   /*
    * @param int 
    * @return Boolean
    */
    public function Valider($idContrat) ;
    /*
     * @param int 
     * @return Boolean
     */
    public function Annuler ($idContrat) ;
    /*
     * @return Tableau de l'Object Contrat
     */
    public function ListerContratAJour() ;
    /*
     * @return Tableau de l'Object Contrat 
     */
    public function ListerContratNonAJour();
}
