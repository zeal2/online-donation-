<?php
$servername = "localhost";
$database = "donation";
$username = "root";
$password = "";

$d_to = $_POST['d_to'];
$d_place = $_POST['d_place'];
const SNAME='admin';
const SPASS='1234';
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{


}