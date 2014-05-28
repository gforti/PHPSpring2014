<?php

$request = filter_input(INPUT_POST, 'username');
$checkUsername = array( "taken" => 'Available', "username" => $request );

echo json_encode($checkUsername);