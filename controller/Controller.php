<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author dii
 */
class Controller {
    protected $viewpath  ;
    protected $template = 'default';


    public function __construct () {

    }
    public function rendre ($view,$variables = [],$variables1 = []) {
        ob_start();
        extract($variables);
        extract($variables1);
        require dirname(__DIR__).'\view\\'.str_replace('.','\\',$view).'.php' ; 
        $content = ob_get_clean();
        require dirname(__DIR__).'/view/templates/'.$this->template.'.php';


    }
}
