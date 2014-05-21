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
        // put your code here
        
        
            function safeMessage($text) {
                    return  htmlspecialchars($text, ENT_QUOTES);
            }
            function xecho($text) {
               echo safeMessage($text);
            }
            
            //PDO
            
            //Session Rotation session_regenerate_id
            
            //password protect with sha1 or greater
        ?>
    </body>
</html>
