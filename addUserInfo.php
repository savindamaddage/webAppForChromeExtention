<?php


if( $_POST ){

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "userInfo";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$usersname = $_POST['username'];
	$password = $_POST['password'];
	$website = $_POST['website'];

	// $username = "Sa";
	// $password = "pa";
	// $website = "we";

	$query1 = "SELECT id FROM user_info WHERE website = '$website' and username = '$usersname'";
	$result = mysqli_query($conn,$query1);
	$count = mysqli_num_rows($result);
	
	if($count==0){

		$query = "INSERT INTO `user_info` (`id`, `username`, `password`, `website`) VALUES (NULL, '$usersname', '$password', '$website');";

		if ($conn->query($query) === TRUE) {
		    echo "success";
		} else {
		    echo " Error: " . $query . "<br>" . $conn->error;
		}
	}
	else{
		echo "already available";
	}

	$conn->close();

}
?>