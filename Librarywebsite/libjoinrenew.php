<html>
	<head>
		<style>
			table, th, td	{
				border: 1px solid black;
				border-collapse: collapse;
		}
th, td	{
		padding : 5px;
		text-align : center;
}

		</style>
	</head>

	
<?php
session_start();
$val1= $_SESSION['varname'];
$val2=$_SESSION['varname1'];
$servername = "localhost";
$username = "root ";
$password = "vasavi";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, 'root', 'vasavi', 'library');

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

echo "<center><h1><i><b>USER RENEWAL DETAILS</b><i></h1></center>";

$sql="select distinct *from renewal join issuedbooks on renewal.user_id=issuedbooks.user_id where (renewal.user_id='$val1') and (renewal.book_id='$val2')";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<centre><table><tr><th>USER ID</th><th>BOOK ID</th><th>ISSUED DATE</th><th>ACTUAL RETURN DATE</th><th>EXTENDED DATE</th></tr></center>";

	while($row=$result->fetch_assoc())
	{
		echo "<center><tr><td>".$row["user_id"] . "</td><td>".$row["book_id"]. "</td><td>".$row["issueddate"] . "</td><td>".$row["returndate"] . "</td><td>".$row["extended_date"] ."</td></tr></center>";
}

echo "</table>";
}

	else {
		echo "no results";
}





