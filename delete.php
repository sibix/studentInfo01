<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "studentinfo";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		// Check connection
		if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}
		echo "Connected successfully<br>";

	$Newname =$_GET["id"];
	
	$sql = "DELETE FROM studentdata WHERE id='$Newname'";

	if (mysqli_query($conn, $sql)) {
    echo "data deleted successfully";
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

	?>
	
