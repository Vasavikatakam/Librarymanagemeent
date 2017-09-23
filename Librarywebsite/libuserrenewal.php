<?php
   session_start();
   $val1= $_SESSION['varname'];
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $val2= $_POST['bookid'];
   //$val2=$_POST['bookid'];
  
   $_SESSION['varname1']=$val2;
   
  $sql="insert into renewal values('$val1','$val2',NOW(),NOW()+interval 7 day )";
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
 else
 {
	 header('Location: libjoinrenew.php');  
 }
   echo "Inserted successfully\n";
   
   mysql_close($conn);
?>