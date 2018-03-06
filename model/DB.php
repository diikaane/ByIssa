<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author dii
 */
class DB {
    private $query ;
    private $rs;
    private $settings;
    private $pdo ;
    private $sql;

    private function getConnection(){
        $this->settings = require \dirname(__DIR__).'/config/configDb.php';
        if ($this->pdo === null ) {
            try {
                $pdo = new PDO(
                    'mysql:dbname='.$this->settings['db_name'].';host='.$this->settings['db_host'],
                    $this->settings['db_user'],
                    $this->settings['db_pass']
                );
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo ;
                return $this->pdo ;
            } catch (Exception $ex) {
                die($ex->getMessage());  
            }
        }
    }
    public function query($statement, $params, $class_name = null) {
        if (is_null($class_name)){
                $data = $this->getConnection()->prepare($statement);
                $datas = $data->execute($params);
                return $datas;
        }else{	
                $data = $this->getConnection()->prepare($statement);
                    if(is_null($params)) {
                        $data->execute();
                    }  else {
                           $data->execute($params);
                    }
                $datas = $data->fetchAll(PDO::FETCH_CLASS,$class_name);
                return $datas;
        }
    }
}
