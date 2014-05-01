<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mainform = new Mainform();
            $states = $mainform->getStates();
            $errors = array();
            
            
            
            if ( $mainform->isPostRequest() && !$mainform->entryIsValid() ) {
                $errors = $mainform->getErrors();
            }
            
            if ( count($errors) ) {
                echo '<ul class="error">';
                foreach ($errors as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
            }
            
            
        ?>
        
         <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Data Form:</legend>
               
                <label for="fullname">Full Name:</label>
                <input id="fullname" type="text" name="fullname" value="<?php echo $mainform->getFullname(); ?>" /> <br /> 
               
                <label for="state">State:</label>
                <select name="state">
                <?php 
                    foreach ($states as $key => $value) {
                        $selected = '';
                        if ( $mainform->getState() === $key ) {
                            $selected = ' selected="selected"';
                        }
                        echo '<option value="',$key,'"', $selected,'>',$value,'</option>';
                    }                    
                ?>
                </select> <br />
                
                <label for="comments">Comments:</label> <br />
                <textarea id="comments" name="comments"><?php echo $mainform->getComments(); ?></textarea><br />           
                
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
        <?php 
        
            if ( $mainform->isPostRequest() && !count($errors) ) {
                $mainform->displayPreview();
            }
        
        ?>
    </body>
</html>
