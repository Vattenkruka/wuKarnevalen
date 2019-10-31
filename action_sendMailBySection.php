<?php

require('dbConnection.php');

$MAILTITLE = $_POST["mailtitle"]; 
$CONTENT = $_POST["content"];
$SECTION = $_POST["section"];
$EMAIL;
//"SELECT id, email, mailtitle,content FROM "

if($SECTION == 'AdministerIT'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='AdministerIT'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$String = implode(',',$cc);
	mail($string,$MAILTITLE,$CONTENT);
	}
	


else if($SECTION == 'Biljonsen'){

	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='Biljonsen'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$String = implode(',',$cc);
	mail($string,$MAILTITLE,$CONTENT);

}

else if($SECTION == 'Blädderiet'){

	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='Blädderiet'");
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	$String = implode(',',$cc);
	mail($string,$MAILTITLE,$CONTENT);
}

else if($SECTION == 'Dansen'){
	$resultTable =mysqli_query($db_conn, "SELECT email FROM studentTable WHERE section='Dansen'");
	echo 'Hej';
	while($row=$resultTable->fetch_array()){
		if($rows=="")
		$rows.=$row['email'];
		else
		$rows.=','.$row['email'];
	}
	echo 'Hej 2';
	$String = implode(',',$cc);
	mail($string,$MAILTITLE,$CONTENT);
	
}			


?>