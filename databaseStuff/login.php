<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "6thsemproj";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$user = $_POST['uname'];
$password = $_POST['psw'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM users WHERE Username= :hjhjhjh AND Password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location:../main.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	echo "Username and Password are not found"; 
	$errflag = true;
}
if($errflag) {
	sleep(5);
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../index.php");
	exit();
}

?>
