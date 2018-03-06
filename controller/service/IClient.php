<?php


/**
 *
 * @author dii
 */
interface IClient {
    /*
     * @param int 
     * @return Boolean
     */
   public function Renouvellement($idContrat);
   /*
    * @param int 
    * @return Boolean
    */
   public function ResilierContrat($idContart);
   
}
