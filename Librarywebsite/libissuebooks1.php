<?php
   session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    $val1=$_SESSION['name1'];
	
   $val2=$_SESSION['name2'];
   ///$_SESSION['name1']=$val1;
   //$_SESSION['name2']=$val2;
   //$val1= $_POST['userid'];
   //$val2=$_POST['bookid'];
  
   
   
 $sql="insert into issuedbooks values('$val1','$val2',NOW(),NOW()+interval 7 day )";
   //$sql="select current_copies from bookdetails where (book_id='$val2')";
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
 else
 {
	 header('Location: libissuedusers.php');  
 }
   echo "Inserted successfully\n";
    /*else
	{
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	  
   if($row['current_copies']>0)
   {
	   header('Location: libissuebooks1.php');   
   }
   else
   {
	   echo "Sufficient copies are not there.you cannot issue";
   }
	   
     
   }
 
   //echo "Fetched data successfully\n";
	}*/
   mysql_close($conn);
?>