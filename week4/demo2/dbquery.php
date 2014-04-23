<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        print_r($_GET);
        
        $id = filter_input(INPUT_GET, 'id');
        
        echo $id;
        
        
        /*
        
        
         $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
            $dbs = $db->prepare('select * from signup');
            $dbs->execute();
            $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            
             $statement = $db->prepare('select * from login where username = :user and password = :password limit 1');
                $statement->bindParam(':user', $email, PDO::PARAM_STR);
                $statement->bindParam(':password', $password, PDO::PARAM_STR);
                $statement->execute(); */
       
        ?>
    </body>
</html>
