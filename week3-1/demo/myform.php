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
           
            print_r($_POST);
            //print_r($_GET);
            
            if ( !empty($_POST) ) {
                
                $email = $_POST['email'];
                $email = filter_input(INPUT_POST, 'email');
                
                
                if ( null == $email)
                    echo "<p>Please fill out all fields";
            }
        ?>
        
        <h2> My Form Demo </h2>
           <form name="mainform" action="#" method="post">            
                Email: <input type="text" name="email" /> <br />           
                Username: <input type="text" name="username" /> <br />          
                Password: <input type="password" name="password" /> <br />           
                <input type="submit" value="Submit" />                        
            </form>
    </body>
</html>
