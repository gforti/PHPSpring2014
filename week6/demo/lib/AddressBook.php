<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adress
 *
 * @author GFORTI
 */
class AddressBook extends DB {
    //put your code here
    
    
    function __construct() {
        $this->setDb();
    }
    
    public function create() {
        
    }
    
    public function update() {
        
    }
    
    public function read() {
        $results = array();
        
         if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from addressbook');
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        
         }
        
        return $results;
    }
    
    public function delete() {
        
    }

}