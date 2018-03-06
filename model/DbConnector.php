<?php
/**
 * Description of DbConnector
 *
 * @author dii
 */
//require dirname(__DIR__).'entities/Client.php';
class DbConnector {
    private $settings;
    private static $_instance ;
    private $pdo ;
    public function __construct() {
	$this->settings = require dirname(__DIR__).'/config/configDb.php';
    }
    public static function getInstance() {
	if (is_null(self::$_instance)) {
            self::$_instance = new DbConnector();
	}
	return self::$_instance;
    }
    public function getPDO(){
        if ($this->pdo === null ) {
            $pdo = new PDO(
                'mysql:dbname='.$this->settings['db_name'].';host='.$this->settings['db_host'],
                $this->settings['db_user'],
                $this->settings['db_pass']
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo ;
        }
        return $this->pdo ;
    }
    public function query($statement,$class_name=null) {
	if (is_null($class_name)) {
            $datas = $this->getPDO()->exec($statement);
            return $datas;
	}else {	
            $req = $this->getPDO()->query($statement);
            $datas = $req->fetchAll(PDO::FETCH_CLASS,$class_name);
            return $datas;
	}
    }
}
