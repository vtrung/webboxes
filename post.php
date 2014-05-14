<?php
include "config.php";
print "<script type=\"text/javascript\">"; 
print "alert('POST.PHP loaded')"; 
print "</script>"; 

//$con = mysqli_connect('localhost','root','root','boxsql');
$name = $_POST['name'];
$content = $_POST['content'];
$x = $_POST['x'];
$y = $_POST['y'];
$width = $_POST['width'];
$height = $_POST['height'];

$sql="USE boxsql";
mysqli_query($con,$sql);

mysqli_query($con, 
	"UPDATE boxTable SET X=".$x.", Y=".$y.", Width=".$width.", Height=".$height.", Content='".$content."' WHERE BoxID='".$name."'");
	
mysqli_close($con);
?>

