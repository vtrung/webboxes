<?php
include "config.php";
//$connect = mysqli_connect('localhost','root','root','boxsql');
$x = 20;
$y = 20;
$width = 150;
$height = 150;

$sql="USE ".$dbname." ;";
mysqli_query($con, $sql);
$sql="INSERT INTO ".$tablename." (Content, X, Y, Width, Height) VALUES ('New DIV',".$x.",".$y.",".$width.",".$height.");";
mysqli_query($con, $sql);
mysqli_close($con);
?>
<script>
	location.reload();
</script>