<?php

$email = "";
if(!empty($_GET["email"]))
{
	$email = $_GET["email"];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      	echo "Thanks for your response";     	
		/*insertEmail();*/
	}
	else
		echo "Email is not valid!";
}else{
	   echo "Email is empty!";
}

/*insert email to database*/
function insertEmail(){
		$servername = "mysql14.gigahost.dk";
		$username = "******";
		$password = "******";
		$database = "inajiang_image";
		$connection = mysqli_connect($servername, $username, $password,$database);
		if ($connection->connect_error) {
	    	die("Connection failed: " . $connection->connect_error);
		} 
		$sql = "SELECT * FROM user WHERE email='$email'";
		$email_result = mysqli_query($connection,$sql);
		if(mysqli_num_rows($email_result) > 0){
		echo "email is already existed in the database";
		} else {
		$sql = "INSERT INTO user (email) VALUES ($email')";
		if ($connection->query($sql) === TRUE) {
		    echo "New user created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $connection->error;
		}
	}

}
?>