<?php

/**
 * Description of UsernameModel
 *
 * @author GFORTI
 */
class UsernameModel {
    //put your code here
    
    private $username;
    
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if ( is_string($username) && !empty($username) && strlen($username) > 3 ){
            $this->username = $username;
        }
    }


    
}
