<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Description of Insert
 *
 * @author dii
 */
class Insert {
    
    private $fields = [] ;
    private $params = [] ;
    private $from = [] ;
    public function select () {
        foreach ( func_get_args() as $args) {	
            array_push($this->fields, $args) ;
	}
	return $this;
    }
    public function param() {
	foreach ( func_get_args() as $args) {	
            array_push($this->data, $args) ;
	}
	return $this ;
    }
    public function from() {
	foreach ( func_get_args() as $args) {	
            array_push($this->from, $args) ;
	}
	return $this ;
    }
    public function  __toString() {
        return "INSERT INTO ". implode(',', $this->from) ." (".implode(',', $this->fields).")"." VALUES (".implode(',', $this->params).")" ; 
    }
}
