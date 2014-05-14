

function init() {
	$("#saveEdit").hide();
	resizeit();
	dragit();
};

//make html class resizable, jquery resizable 
function resizeit(){
console.log("IN");
    	$( ".resizable" ).resizable();
};
//

// make html class box, draggable
function dragit(){
	$(".box").draggable({ containment: "#container" });
};
//

function saveit(){
	$("div").each(function(){
			if($(this).hasClass("autogen")){
				$boxX = $(this).position().left;
				$boxY = $(this).position().top;
				$boxWidth = $(this).width();
				$boxHeight = $(this).height();
				$boxName = $(this).attr('id');
				$boxContent = $(this).text();
				$("#test").text("Saved"); 
				$.post("post.php",{name:$boxName, x:$boxX, y:$boxY, width:$boxWidth, height:$boxHeight, content:$boxContent}, function(){});
				$("#test").append(" World");
			};	
	});
};
//Create a new div for database
$("#create").click(function(){
	$("#test").text("Created"); 
	$.post("create.php",{name:'new'}, function(){});
	location.reload();
});
//

//on click of save Button, post update to database the boxes positions and content
$("#saveButton").click(function(){
		$("div").each(saveit()); 
});
//



//Create textArea for user to change the content of boxes
$("#editButton").click(function(){
		$("#saveEdit").show();
		$("div").each(function(){
			if($(this).hasClass("autogen")){
				$text = $(this).text();
				$(this).text("");
				$(this).append("<textarea id='textbox' style='height:80%;width:100%;vertical-align:top;'>"+$.trim($text)+"</textarea>");
			};	
		}); 
});
//

//Save the TextArea changes
$("#saveEdit").click(function(){
			$("div").each(function(){
				if($(this).hasClass("autogen")){
				$text = $("textarea").val();
				$(this > "textarea").remove();
				$(this).text($text);
				};
			});
			$("#saveEdit").hide();
			saveit();
			setTimeout(location.reload(),5000);
			//location.reload(true);
});
//

$(document).ready(init());