<?php //there is no closing tag. This is pure php file

$dbServername="localhost"; //we are running a local server
$dbUsername="root"; //using xampp
$dbEmail=""; //xampp has now password
$dbName="demoemailrecovery"; //name of database we created

$conn= mysqli_connect($dbServername,$dbUsername,$dbEmail,$dbName);//pass the parameters created above

/////////THUS WE HAVE CONNECTION TO DATABASE //////////