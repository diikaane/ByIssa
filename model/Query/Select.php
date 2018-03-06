<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Select
 *
 * @author dii
 */
class Select {
    private $fields = [] ;
    private $conditions = [] ;
    private $from = [] ;
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
    public function from() {
	foreach ( func_get_args() as $args) {	
            array_push($this->from, $args) ;
	}
	return $this ;
    }
    public function __toString() {
	if(count($this->fields)==0){
            if(count($this->conditions)== 0 )  {
                return
                    " SELECT * " ." FROM ".implode(',', $this->from) ;
            }else {
                return
                    " SELECT * " ." FROM ".implode(',', $this->from) ." WHERE ". implode(' AND ', $this->conditions);
            }
	} else {
            if(count($this->conditions)==0) {
                return
      " SELECT " .implode(',', $this->fields)." FROM ".implode(',', $this->from);
            }  else {
                return
                    " SELECT " .implode(',', $this->fields)." FROM ".implode(',', $this->from) ." WHERE ". implode(' AND ', $this->conditions);
            }
        }
    	
    }
}
