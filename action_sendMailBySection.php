<?php

require('dbConnection.php');

$MAILTITLE = $_POST["mailtitle"]; 
$CONTENT = $_POST["content"];
$SECTION = $_POST["section"];
$EMAIL;
//"SELECT id, email, mailtitle,content FROM "



if($SECTION === 'administerIT'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='administerIT'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$TO = explode(',',$rows);
	$STRING = implode(',',$TO);
	mail($STRING,$MAILTITLE,$CONTENT);
	echo 'Mail skickat!';
	}
	

else if($SECTION === 'biljonsen'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='biljonsen'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$TO = explode(',',$rows);
	$STRING = implode(',',$TO);
	mail($STRING,$MAILTITLE,$CONTENT);
	echo 'Mail skickat!';

}

else if($SECTION === 'blädderiet'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='blädderiet'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$TO = explode(',',$rows);
	$STRING = implode(',',$TO);
	mail($STRING,$MAILTITLE,$CONTENT);
	echo 'Mail skickat';
}

else if($SECTION === 'dansen'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='$SECTION'");
	echo 'Hej';
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	
	}
	$TO = explode(',',$rows);
	$STRING = implode(',',$TO);
	mail($STRING,$MAILTITLE,$CONTENT);
	echo 'Mail skickat!';
	
}			


?>