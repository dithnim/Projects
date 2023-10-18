<?php

require_once( "../connections/connection_main.php" );
require_once( "../functions/send_requests.php" );

if ($_SERVER[ 'REQUEST METHOD' ] == "POST")
{
    $jsondata = file_get_contents( "php://input" );
    $data = json_decode($jsondata, true);

    if(isset($data)){
        $username = $data[ "username" ];
        $password = $data[ "password" ];

        $selection = $conn->query("SELECT user_name,password FROM login_user");
        
    }
}
?>