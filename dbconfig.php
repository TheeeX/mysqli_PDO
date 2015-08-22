<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "pixie";

//try{
	$conn=new PDO ("mysql:host=$servername;dbname=$dbname", $username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	$sql="INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('99','ffname','femail')";
//	 $conn->exec($sql);
//	    echo "New record created successfully";
//}
//catch(PDOException $e)
//    {
//    echo $sql . "<br>" . $e->getMessage();
//    }
//echo ('success!');

?>