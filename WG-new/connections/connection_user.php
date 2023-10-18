<?php

$conn = new mysqli( "localhost", "root", "", "user" );

if ($conn->connect_error)
{
    die( "connection failed" . $conn->connect_error );
} else {
    echo "okay";
}
?>