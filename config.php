<?php
$severname="localhost";
$username="root";
$password="";
$dbname="datacollectionandprocessing";

//create connection

$conn= new mysqli($severname,$username,$password,$dbname);

//checkconnection

if($conn->connect_error)
{
 die("connection failed:" . $conn->connect_error);

}

?>