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

$Newname ='jina';
$sql= "SELECT * FROM `studentdata` where name like '$Newname'";
$result = mysqli_query($conn,$sql);


while ($row=mysqli_fetch_array($result)) {
	$name1=$row["name"];
	$parentname1=$row["parentname"];
	$email1=$row["email"];
}


echo "<table>";
	echo "<tr>";

		echo"<td>".$name1."</td>";
		echo"<td>".$parentname1."</td>";
		echo"<td>".$email1."</td>";

	echo "</tr>";
echo "</table>";






?>
<form action="update.php" method="post">

		New Student name<input type="text" name="name">
		New Parent name <input type="text" name="parentName">
		New Mobile number<input type="text" name="mobileNumber">
		<input type="submit">
	</form>	

	<?php
		if(isset($_POST['name']))
			{ 
				$name2 = $_POST['name'];
				$sql = "UPDATE studentdata SET name='$name2'WHERE name='jina'";
				echo "New name saved sccessfully<br>";
			} 

		if(isset($_POST['parentName']))
			{ 
				$parentname2 = $_POST['parentName'];
				$sql = "UPDATE studentdata SET parentname='$parentname2'WHERE name='jina'";
				echo "New parent name saved sccessfully<br>";

			}
		if(isset($_POST['mobileNumber']))
			{ 
				$mobile2 = $_POST['mobileNumber'];
				$sql = "UPDATE studentdata SET email='$mobile2'WHERE name='jina'"; 
				echo "New mobile no saved sccessfully<br>";
			}
			




	?>

		
	

	



