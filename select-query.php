<?php
require 'dbconfig.php';

//echo "one";

$fuid =99;

try{
	$sql = "SELECT * FROM Users where Fuid='$fuid'";
	echo "onepointfive";
	
	foreach ($conn->query($sql) as $row) {
		print $row['UID'] . "\t";
	
	}
	
	/*
	$stmt = $pdo->query($sql); 
	$row =$stmt->fetchObject();
	echo $row->filmName;
	echo $row->filmDescription;
	*/
	/*
	foreach($fuid as $Fuid) {
	        $stmt->execute($id);
	        echo $stmt->fetch(PDO::FETCH_COLUMN);
        }*/

}catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}

//echo "two";

?>
