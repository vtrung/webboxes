<?php
print "<script type=\"text/javascript\">"; 
print "alert('POST.PHP loaded')"; 
print "</script>"; 

$connect = mysqli_connect('localhost','root','root','boxsql');
$name = $_POST['name'];
$x = $_POST['x'];
$y = $_POST['y'];
$width = $_POST['width'];
$height = $_POST['height'];

mysqli_query($connect, 
	"UPDATE boxTable SET X=".$x.", Y=".$y.", Width=".$width.", Height=".$height." WHERE BoxID='".$name."'");
	
mysqli_close($connect);
?>
