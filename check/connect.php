<?php
	
	
	//Database Connection
	$servername= "localhost";
	$username="sqluser";
	$password="sqlpass";
	$dbname="form";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	//$conne = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		die("Connection Failed : ".$conn->connect_error);
	
	}
	echo "Connection Successful";


	$FirstName = $_POST['FirstName'];
	$LastName= $_POST['LastName'];
	$Gender= $_POST['Gender'];
	$Email= $_POST['Email'];
	$DateOfBirth= $_POST['DateOfBirth'];
	$Address= $_POST['Address'];
	//echo $FirstName,$LastName,$Gender,$Email,$DateOfBirth,$Address;
	$sql ="INSERT INTO form (FirstName,LastName,Gender,Email,DateOfBirth,Address) VALUES('$FirstName','$LastName','$Gender','$Email','$DateOfBirth','$Address')";
	mysqli_query($conn, $sql);

	//else
	//$stmt = $conn->prepare("insert into form(FirstName, LastName, Gender, Email, DateOfBirth,Address)values(?, ?, ?, ?, ?, ?)");
	//$stmt->bind_param("ssssis",$FirstName ,$LastName,$Gender, $Email,$DateOfBirth , $Address);
	//$stmt->execute();
	//echo ("registration successful");
	//$stmt->close();
	//$conn->close();
	//}


?>