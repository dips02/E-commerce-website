<?php
$conn=new mysqli("localhost","root","","dipmala");

if($conn->connect_error)
{
    echo "Connection failed!, Aborting Execution";
}
?>