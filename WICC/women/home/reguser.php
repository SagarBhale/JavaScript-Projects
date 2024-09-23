<?php
	$servername = "localhost";
	
	$username = "root";
	
	$password = "";
	
	$dbname = "icc";
	
	
	// Create connection
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	
	if ($conn->connect_error) {
	
	  die("Connection failed: " . $conn->connect_error);
	
	}
	
	@$fname=$_POST['fname'];
	
	@$lname=$_POST['lname'];
	
	@$uname=$_POST['uname'];
	
	@$email=$_POST['email'];
	
	@$phone=$_POST['phone'];
	
	@$enroll=$_POST['enroll'];
	
	@$bandy=$_POST['bandy'];
	
	@$pass=$_POST['pass'];
	
	@$cpass=$_POST['cpass'];
	
	@$date=$_POST['F j, Y, g:i a'];
	
	
	$sql = "INSERT INTO `userregistration` (`srno`, `fname`, `lname`, `uname`, `email`, `phone`, `enroll`, `bandy`, `pass`, `cpass`,`date`) 
	
	VALUES (NULL,'$fname', '$lname', '$uname', '$email', '$phone', '$enroll', '$bandy', '$pass', '$cpass','$date')";
	
	
	
	if ($conn->query($sql) === TRUE) {
	
		echo "New record created successfully";
	  
	  } else {
	  
		echo "Error: " . $sql . "<br>" . $conn->error;
	  
	  }
	  
	  $conn->close();
	  
	  ?>