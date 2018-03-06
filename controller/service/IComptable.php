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
interface IComptable {
    /*
     * @param int
     * return Boolean
     */
    public function VerifNumberBank($idContrat) ;
    /*
     * @param int
     * @return Tableau de l'Object Contrat
     */
    public function ContratAJour($idEmploye);
    /*
     *@param int
     * @return Tableau de L'Object Contrat 
     */
    public function ContratNonAJour($idEmploye) ;
}
