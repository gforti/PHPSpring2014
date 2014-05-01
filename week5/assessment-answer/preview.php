<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Preview your Post </h1>
        
        <?php
            $mainform = new Mainform();
            $stateCode = $mainform->getState();
            echo '<em>From:</em> <strong>',$mainform->getFullname(),'</strong> <br />';
            echo '<em>Location:</em> ',$mainform->getStateNameByCode($stateCode), '<br />';
            echo '<em>Posted On:</em> ',$mainform->getPostDateTime(), '<br />';
            echo '<em>Comments:</em> <blockquote>',$mainform->getComments(), '</blockquote>';            
        ?>
        
        </table>
    </body>
</html>
