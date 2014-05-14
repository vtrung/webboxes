<?php
include 'config.php';
//$con = mysqli_connect('localhost','root','root');

$sql="CREATE DATABASE boxsql;";
if (mysqli_query($con,$sql)) {
  echo "<br>Database boxsql created successfully";
} else {
  echo "<br>Error creating database: " . mysqli_error($con);
}

//Build boxTable table in database
$sql="USE boxsql;";

if(mysqli_query($con,$sql)){
	echo "<br>use boxsql success";
}else{
	echo "<br>use boxsql failed";
	echo "<br>Error USE boxsql: " . mysqli_error($con);
};

$sql="CREATE TABLE boxTable (";
$sql.="BoxID int NOT NULL AUTO_INCREMENT,";
$sql.="Content text,";
$sql.="X int,";
$sql.="Y int,";
$sql.="Width int,";
$sql.="Height int,";
$sql.="PRIMARY KEY (BoxID));";

if (mysqli_query($con,$sql)) {
  echo "<br>Database boxsql created successfully";
} else {
  echo "<br>Error creating table: " . mysqli_error($con);
}

$con.close();