
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


			$Newname=$_POST['var'];

			echo $Newname;

		if(isset($_POST['name']))
			{ 
				$name2 = $_POST['name'];
				$sql= "UPDATE studentdata SET name='$name2'WHERE id='$Newname'";
					if (mysqli_query($conn, $sql)) {
    						echo "Name updated successfully<br>";
													} else {
   								 							echo "Error updating name: " . mysqli_error($conn);
															}

			} 

		if(isset($_POST['parentName']))
			{ 
				$parentname2 = $_POST['parentName'];
				$sql = "UPDATE studentdata SET parentname='$parentname2'WHERE id='$Newname'";
				if (mysqli_query($conn, $sql)) {
    						echo "Parent Name updated successfully<br>";
													} else {
   								 							echo "Error updating Parent name: " . mysqli_error($conn);
															}
				

			}
		if(isset($_POST['mobileNumber']))
			{ 
				$mobile2 = $_POST['mobileNumber'];
				$sql = "UPDATE studentdata SET email='$mobile2'WHERE id='$Newname'"; 
					if (mysqli_query($conn, $sql)) {
    						echo "Mobile no updated successfully<br>";
													} else {
   								 							echo "Error updating Mobile no: " . mysqli_error($conn);
															}
				
			}
		?>
