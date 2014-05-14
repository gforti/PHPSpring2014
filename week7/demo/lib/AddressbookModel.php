<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddressbookModel
 *
 * @author GFORTI
 */
class AddressbookModel {
    //put your code here
    
    private $address;
    private $city;
    private $state;
    private $zip;
    private $name;
    private $id;
    
    
    function __construct($paramArr) {
        
    }

    
    public function map($paramArr) {
        
    }
    
    public function getAddress() {
        return $this->address;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
    }


    
}
