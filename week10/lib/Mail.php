<?php

/**
 * Description of Mail
 *
 * @author GForti
 */
class Mail extends MailModel {
    //put your code here
    
    
    public function send() {
        
        $to = Util::cleanForHtml($this->getTo());
        $subject = Util::cleanForHtml($this->getSubject()); 
        $message = Util::messageMailWrap(Util::cleanForHtml($this->getMessage())); 
                
       return mail($to, $subject, $message);
        
    }
    
    public function sendHtml() {
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                
        $to = Util::cleanForHtml($this->getTo());
        $subject = Util::cleanForHtml($this->getSubject()); 
        $message = Util::messageMailWrap(Util::cleanForHtml($this->getMessage()));
       
        
        return mail($to, $subject, $message, $headers);
        
    }
    
    
}
