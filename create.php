<?php
$connect = mysqli_connect('localhost','root','root','boxsql');
$x = 20;
$y = 20;
$width = 50;
$height = 50;

$sql="INSERT INTO boxTable (Content, X, Y, Width, Height) VALUES ('New DIV',".$x.",".$y.",".$width.",".$height.");";
mysqli_query($connect, $sql);
mysqli_close($connect);
?>