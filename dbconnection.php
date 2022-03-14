<?php
$servername="localhost";
$username="root";
$password="";
$dbname="polyrobots";
// Connection DB
$conn= new mysqli($servername,$username,$password,$dbname);
// Test cnx
if($conn->connect_error){
    die("Cnx Failed : ".$conn->connect_error);
}
?>