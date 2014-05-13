<?php
$connect = mysqli_connect('localhost','root','root','boxsql');
$x = 20;
$y = 20;
$width = 150;
$height = 150;

$sql="INSERT INTO boxTable (Content, X, Y, Width, Height) VALUES ('New DIV',".$x.",".$y.",".$width.",".$height.");";
mysqli_query($connect, $sql);
mysqli_close($connect);
?>
<script>
	location.reload();
</script>