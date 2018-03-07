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
   public function Renouvellement($idContrat,$newDate);
   /*
    * @param int
    * @return Boolean
    */
   public function ResilierContrat($idContart);

}
