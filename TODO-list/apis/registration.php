<?php
require_once( '../components/connection.php' );

if ($_SERVER[ 'REQUEST_METHOD' == "POST" ])
{
    $jsondata = file_get_contents( 'php://input' );
    $data = json_decode( $jsondata, true );
    echo $data['username'];
}
else
{
    echo 'NO';
}
?>