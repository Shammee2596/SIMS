<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "sims";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";                                                                                                                                    