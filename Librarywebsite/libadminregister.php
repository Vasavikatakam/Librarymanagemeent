<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $val1= $_POST['name'];
   $val2=$_POST['password1'];
  
   
   
  $sql="insert into admin values(admin_id,'$val1','$val2')";
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
 else
 {
	 echo "Registered successfully";
	 //header('Location: libissuedusers.php');  
 }
   //echo "Inserted successfully\n";
   
   mysql_close($conn);
?>