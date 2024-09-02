<?php

 
	
	$hname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'dmw';

	$con = mysqli_connect($hname,$uname,$pass,$db);

	if (!$con) {
		die("Cannot Connect to Database".mysqli_connect_error());
	}

	function filteration($data){
		foreach ($data as $key => $value) {
			$data[$key] = trim($value);
			$data[$key] = stripcslashes($value);
			$data[$key] = htmlspecialchars($value);
			$data[$key] = strip_tags($value);
		}
		return $data;
	}

	function select($sql,$values,$datatypes)
	{
		$con = $GLOBALS['con'];
		if ($stmt = mysqli_prepare($con,$sql)) {
			mysqli_stmt_bind_param($stmt,$datatypes,...$values);		
		}
		else{
			die("Query cannot be executed - Select");
		}
	}
 

$usernam=$_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['confirmPassword'];

//echo $username;
//echo $email;
//echo $password;
//echo $password_confirm;  



$sqli = "INSERT INTO reg(username,email,password,confirmpassword) 
VALUES ('$usernam', '$email', '$password', '$password_confirm')" ;

//echo $sqli;
if($con->query($sqli) === TRUE){
//header('location:../book.php'); 
echo"done";
}else{
echo $conn->error;


if (mysqli_num_rows($result_set) == 1){
	
	if( $email == "admin@gmail.com"){
	header('location:../crud.php');
	}else{
		
		

   header('location:index.php'); 
	}
}else{
 header('location:index.php'); 
  


}

}