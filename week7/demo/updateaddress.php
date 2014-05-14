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
        
        Util::confirmAccess();
      
        
         $address = new AddressBook();
         
         $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
         //$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
         
         $addressResult = $address->read($id);
          print_r($addressResult);
          
          
         // echo $addressResult['address'];
          
        
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Update:</legend>
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="<?php echo $addressResult['address']; ?>" /> <br />
               
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
        
    </body>
</html>
