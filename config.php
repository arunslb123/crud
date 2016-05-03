<?php

 //$host = "us-cdbr-azure-southcentral-e.cloudapp.net";
 //   $user = "b5e6932691e7ad";
 //   $pwd = "431dfc7a";
 //   $db = "acsm_4729051611eebc5";
 //   // Connect to database.
 //   try {
 //       $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
 //       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 //   }
 //   catch(Exception $e){
 //       die(var_dump($e));
 //   }
    
    

// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("us-cdbr-azure-southcentral-e.cloudapp.net","b5e6932691e7ad","431dfc7a") 
			or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("acsm_4729051611eebc5",$conn);
	
?>
