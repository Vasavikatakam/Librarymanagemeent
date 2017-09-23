<?php
session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $val1= $_POST['userid'];
	$val2=$_POST['password1'];
	$_SESSION['varname'] = $val1;

   $sql = "SELECT count(*) as value from userdetails where (userdetails.user_id='$val1') and (userdetails.contact_no='$val2')";
   
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
//   echo "<h2><center> Cities in a district '$val'</center></h2>";
 
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	  
      if ($row['value']==1)
	  {
		header('Location: libuserlinks.html');  
	  }
	  else
	  {
		
	  echo "<center><div style ='font:30px/30px Arial, tahoma,sans-serif;color:#ff0000'>Entered details are incorrect.Please try again!!</div></center>";
	//header('Location:libuserlinks.php');	 
	 }  
	   
   }
   exit();
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>