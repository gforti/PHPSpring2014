<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * @author GFORTI
 */
class Passcode {
    //put your code here
    
    private $passcode;
    
    function __construct() {
        
    }
    
    public function getPasscode() {
        return $this->passcode;
    }

    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }



}
