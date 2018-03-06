<?php



/**
 *
 * @author dii
 */
interface IAdministrateur{
    /*
     * @params Object Employe
     * @return Boolean
     */
public function Ajouter($Employe) ;
/*
 * @params Object Employe
 *  @return Boolean
 */
public function Update($Employe) ;
/*
 * @return Tableau de Employe
 */
public function Lister() ;

}
