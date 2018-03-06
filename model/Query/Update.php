<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Update
 *
 * @author dii
 */
class Update {
    private $fields = [] ;
    private $set = [] ;
    private $conditions = [] ;
    private $from = [] ;
    public function from() {
	foreach ( func_get_args() as $args) {	
            array_push($this->from, $args) ;
	}
	return $this ;
    }
    public function select () {
	$this->fields = func_get_args();
	return $this;
    }
    public function where() {
	foreach ( func_get_args() as $args) {	
            array_push($this->conditions, $args) ;
	}
	return $this ;
    }
    public function set($fields , $data ) {
        $this->set[] = " $fields = $data" ; 
	return $this ; 
    }
    public function __toString() {
        return
            "UPDATE ".implode(',', $this->from).
            " SET " .implode(',', $this->set) .
            " WHERE " .implode(' AND ', $this->conditions) ;
    }
}
