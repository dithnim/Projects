<?php

require_once( "../connections/connection_main.php" );
require_once( "../functions/send_requests.php" );


$jsondata = file_get_contents( "php://input" );
$data     = json_decode( $jsondata, true );

if (isset( $data ))
{
    $username = $data[ "username" ];
    $password = $data[ "password" ];

    $selection = $conn->query( "SELECT user_name,password FROM login_user;" );

    if (mysqli_num_rows( $selection ) > 0)
    {
        while ($row = $selection->fetch_assoc())
        {
            if ($row[ "user_name" ] == $username)
            {
                if ($row[ "password" ] == $password)
                {
                    header( "Location: http://localhost/Projects/Projects/WG-new/main/main.html" );
                    exit();
                }
            }
        }
    }
}


?>