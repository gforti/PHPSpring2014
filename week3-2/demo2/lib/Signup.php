<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author GFORTI
 */
class Signup {
    //put your code here
    
    /*
     * Todo -   Store the POST values into a variable and 
     * Todo - output non-password fields back into the input value
     * Todo -   Validation for all input fields
     * Todo -   show message if there is an error other wise notify the 
     *          user that all the data submited is correct
     */
    
    
    private $email;
    private $username;
    private $password;
    private $confirmpassword;
   
    
    function __construct() {
        $email = filter_input(INPUT_POST, 'email');
        $this->setEmail($email);        
    }

    
    
    
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmpassword() {
        return $this->confirmpassword;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setConfirmpassword($confirmpassword) {
        $this->confirmpassword = $confirmpassword;
    }



    
    
    
    
    
    
}
