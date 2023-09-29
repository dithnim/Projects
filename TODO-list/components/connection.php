<?php
$conn = new mysqli( 'localhost', 'root', '', 'todo' );

if ($conn->connect_error)
{
    die( 'Connection failed' . mysqli_connect_error() );
}
?>