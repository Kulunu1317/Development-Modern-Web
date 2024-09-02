<?php

$id = $_GET["id"];

echo $id;


	
	$hname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'dmw';

	$con = mysqli_connect($hname,$uname,$pass,$db);

	if (!$con) {
		die("Cannot Connect to Database".mysqli_connect_error());
	}



$sql = "DELETE FROM reg WHERE id=$id";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
