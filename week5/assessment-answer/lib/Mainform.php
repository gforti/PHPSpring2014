<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mainform
 *
 * @author GFORTI
 */
class Mainform {
    //put your code here
    
    private $fullname,
            $state,
            $comments,
            $errors;
    
    function __construct() {       
        $this->setFullname(filter_input(INPUT_POST, 'fullname'));      
        $this->setState(filter_input(INPUT_POST, 'state'));
        $this->setComments(filter_input(INPUT_POST, 'comments'));        
    }
    
    public  function getFullname() {
        return $this->fullname;
    }

    public function getState() {
        return $this->state;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }
    
    public function getErrors() {
        return $this->errors;
    }

         
    /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */ 
     public static function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    
    /**
    * A method to check if a posted Values are valid.
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->stateEntryIsValid();
        $this->fullNameEntryIsValid();
        $this->commentsEntryIsValid();       
        return ( count($this->errors) ? false : true );
    }
    
    /**
    * A method to check if a posted State is valid.
    * Adds a custom message to the errors list key["state"]
    *
    * @return boolean
    */   
    
    public function stateEntryIsValid() {
        
         $state = $this->getState();
         
         if ( empty($state) ) {
            $this->errors["state"] = "State is not selected.";
         } else if ( $this->getStateNameByCode($state) === '' ) {
            $this->errors["state"] = "State is not valid.";                
         }
        
        return ( empty($this->errors["state"]) ? true : false ) ;
    }
    
     /**
    * A method to check if a posted Comments is valid.
    * Adds a custom message to the errors list key["comments"]
    *
    * @return boolean
    */   
    
    public function commentsEntryIsValid() {
        
         $comments = $this->getComments();
         
         if ( empty($comments) ) {
            $this->errors["comments"] = "Comments are missing.";
         } else if ( !Validator::commentIsValid($comments) ) {
            $this->errors["comments"] = "Comments are not valid.";                
         }
        
        return ( empty($this->errors["comments"]) ? true : false ) ;
    }
    
    
     /**
    * A method to check if a posted Full Name is valid.
    * Adds a custom message to the errors list key["fullname"]
    *
    * @return boolean
    */   
    
    public function fullNameEntryIsValid() {
        
         $fullName = $this->getFullname();
         
         if ( empty($fullName) ) {
            $this->errors["fullname"] = "Full Name is missing.";
         } else if ( !Validator::nameIsValid($fullName) ) {
            $this->errors["fullname"] = "Full Name is not valid.";                
         }
        
        return ( empty($this->errors["fullname"]) ? true : false ) ;
    }
    
    /**
    * A method to return the current date and time.
    *
    * @return Date
    */   
    public function getPostDateTime() {
        return date('F j, Y, g:i a');
    }


    /**
    * A method to return the full US State name by the two letter code.
    *
    * @return String
    */  
     public function getStateNameByCode( $code ) {
         $states = $this->getStates();
         return ( array_key_exists($code, $states) ? $states[$code] : '' );
     }
     
    /**
    * A method to return a list of US States.
    *
    * @return Array
    */   
    public function getStates() {
        return array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
    }
    
    /**
    * A method to echo a Preview of the form submited.
    *
    * @return Void
    */   
    public function displayPreview() {
        $stateCode = $this->getState();
        echo '<h1> Preview your Post </h1>';
        echo '<em>From:</em> <strong>',$this->getFullname(),'</strong> <br />';
        echo '<em>Location:</em> ',$this->getStateNameByCode($stateCode), '<br />';
        echo '<em>Posted On:</em> ',$this->getPostDateTime(), '<br />';
        echo '<em>Comments:</em> <blockquote>',$this->getComments(), '</blockquote>';
        
    }
    
}
