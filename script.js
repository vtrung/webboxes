//make html class resizable, jquery resizable 
$(function() {
    	$( ".resizable" ).resizable();
});
//
// make html class box, draggable
$(function(){
	$(".box").draggable({ containment: "#container" });
});

$("#testButton").click(function(){
		$("div").each(function(){
			if($(this).hasClass("autogen")){
				$boxX = $(this).position().left;
				$boxY = $(this).position().top;
				$boxWidth = $(this).width();
				$boxHeight = $(this).height();
				$boxName = $(this).attr('id');
				$("#test").text("Saved"); 
				$.post("post.php",{name:$boxName, x:$boxX, y:$boxY, width:$boxWidth, height:$boxHeight}, function(){});
				$("#test").append(" World");
			};	
		}); 
});

$("#create").click(function(){
	$("#test").text("Created"); 
	$.post("create.php",{name:'new'}, function(){});
	location.reload();
});

$("#editButton").click(function(){
		$("div").each(function(){
			if($(this).hasClass("autogen")){
				$text = $(this).text();
				$(this).empty();
				$(this).append("<textarea id='textbox' style='height:80%;width:100%;vertical-align:top;'>"+$.trim($text)+"</textarea>");
			};	
		}); 
});

$("#save").click(function(){
			$("div").each(function(){
				$text = $("#textbox").val();
				$("#container textarea").remove();
				$("#container #save").remove();
				$("#container").text($text);
			});
});