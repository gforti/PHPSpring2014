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
                <label for="name">Address:</label> 
                <input id="name" type="text" name="name" value="<?php echo $addressResult['name']; ?>" /> <br />
               
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="<?php echo $addressResult['address']; ?>" /> <br />
               
                <label for="city">City:</label> 
                <input id="city" type="text" name="city" value="<?php echo $addressResult['city']; ?>" /> <br />
               
                <label for="state">State:</label> 
                <input id="state" type="text" name="state" value="<?php echo $addressResult['state']; ?>" /> <br />
                              
                <label for="zip">ZIP:</label> 
                <input id="zip" type="text" name="zip" value="<?php echo $addressResult['zip']; ?>" /> <br />
               
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
        
    </body>
</html>
