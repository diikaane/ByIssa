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
interface IJuriste {
    /*
     * @param int 
     * @return Tableau de Documents Invalides
     */
    public function VerifierContrat($idContrat) ;
    /*
     * @param int 
     * @return Boolean
     */
    public function ValiderContrat($idContrat) ;
    /*
     * @param int 
     * @return Tableau de Documents Invalides
     */
    public function ReenvoyerContrat($idContrat) ;
    /*
     * @param int
     * @return Tableau de L'Object Contrat
     */
    public function Lister($idEmployer);
}
