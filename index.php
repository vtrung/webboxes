
<html>
<head>
	<meta charset ="utf-8">
	<link href="main.css" rel="stylesheet">
	<script src="script.js"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<title>Testing Positioning Page</title>
</head>

<body>
	<h1 id="ft">Let's us begin</h1>
	<button id="testButton"> SAVE </button>
	<button id="create">Create</button>
	<div id='test'> Test Div </div>
	<div id='container' class='box' style='opacity:1;height:400px;width:700px;'>
	<?php
		$connect = mysqli_connect('localhost','root','root','boxsql');
		if (mysqli_connect_errno($connect))
  		{
  			echo("Failed to connect to MySQL: " . mysqli_connect_error());
  		} else {
  			//echo("connected");
  		};
		$result = mysqli_query($connect,"SELECT * FROM boxTable");
		while($row = mysqli_fetch_array($result)){
			echo("<div style='position:absolute;top:".$row['Y']."px;left:".$row['X']."px;height:".$row['Height']."px;width:".$row['Width'].";'");
			echo(" class='box draggable resizable autogen ui-widget-content' id=" . $row['BoxID'] . "> ");
			echo($row['Content'] . " and the Height is " . $row['Height'] . "</div>");
		};
	?>
	</div>
	
	<script src="script.js"></script>
	<script>
	
  	</script>


</body>
</html>