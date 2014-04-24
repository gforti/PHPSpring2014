<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup2
 *
 * @author GFORTI
 */
class Signup2 {
    //put your code here
    
    private $email;
    private $username;
    private $password;
    private $confirmPassword;
    

        public function __construct() {
        $this->setEmail(filter_input(INPUT_POST, 'email'));
        $this->username = filter_input(INPUT_POST, 'username');
        $this->password = filter_input(INPUT_POST, 'password');
        $this->confirmPassword = filter_input(INPUT_POST, 'confirmPassword');        
    }
    
    
    
    /**
    * A method to get email
    *
    * @return String
    */ 
    public function getEmail() {
        return $this->email;
    }

    /**
    * A method to set email
    *
    * @param string $email
    * 
    * @return void
    */ 
    private function setEmail($email) {
        $this->email = $email;
    }


    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmPassword() {
        return $this->confirmPassword;
    }

    private function setUsername($username) {
        $this->username = $username;
    }

    private function setPassword($password) {
        $this->password = $password;
    }

    private function setConfirmPassword($confirmPassword) {
        $this->confirmPassword = $confirmPassword;
    }
    
}
