<?php
$servername = "localhost";
$username = "root";
$password = "15511551aA/";
$conn=new mysqli($servername,$username,$password,"avail");
if ($conn->connect_error)
{
    die("database connection error");
}

?>