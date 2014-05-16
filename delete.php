<?php
include "config.php";
//$connect = mysqli_connect('localhost','root','root','boxsql');

$id = $_POST['id'];
$sql="USE ".$dbname.";";
mysqli_query($con, $sql);

$sql="DELETE FROM ".$tablename." WHERE BoxID = '".$id."';";
mysqli_query($con, $sql);
mysqli_close($con);
?>
<script>
	location.reload();
</script>