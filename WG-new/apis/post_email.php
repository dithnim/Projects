<?php

require_once( '../connections/connection_user.php' );
require_once( '../functions/send_requests.php' );

if ($_SERVER[ 'REQUEST_METHOD' ] == "POST")
{
    $jsondata = file_get_contents( "php://input" );
    $data     = json_decode( $jsondata, true );

    if (isset( $data ))
    {
        $email = $data[ "email" ];
        $stmt = $conn->prepare( "INSERT INTO `email_notifies` (`email`) VALUES (?);" );
        $stmt->bind_param( "s", $email );

        echo "hii";
        $stmt->execute();

        if ($stmt->error)
        {
            sendres( "500", "", $stmt->error );
            $stmt->close();
            $conn->close();
        }
        else
        {
            $stmt->close();
            $conn->close();
        }
        
    }
}
?>