<?php
function sendres ( $state, $data, $msg )
{
    $res = array( "state" => $state
    , "data" => $data,
    "msg"   => $msg );
    echo json_encode( $res );
}
?>