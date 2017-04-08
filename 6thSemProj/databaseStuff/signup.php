<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "6thsemproj";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (Username, Password)
    VALUES ('". $_POST['uname'] ."', '". $_POST['pswSignUp'] ."')";
    // use exec() because no results are returned
		try{
			$conn->exec($sql);
			header("location:../index.php");

		}
		catch(PDOException $e){
			echo "Registeration Failed!";
		}
  }
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }

		$conn = null;
?>
