<?php
$servername = "localhost";
$database = "donation";
$username = "root";
$password = "";

$sname= $_POST['sname'];
$scity = $_POST['scity'];
$c.no = $_POST['c.no'];
$semail= $_POST['semail'];
$spro = $_POST['spro'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{	
	$stmt=$conn->prepare("insert into don(sname, scity, c.no, semail, spro) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("issss",$sname, $scity, $c.no, $semail, $spro);
	$stmt->execute();
	echo "registered successfully";
	mysqli_close($stmt);
	mysqli_close($conn);
}
?>