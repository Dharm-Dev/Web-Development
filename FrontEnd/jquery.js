$(document).ready(function(){
	var i=0;
	//---------------Paragraph events-------------------
	$("p").on({
		click:function(){
			$(this).css("background-color","white");
			$(this).css("color","green");
			$("#event").text("Clicked");
		},
		dblclick:function(){
			$(this).css("background-color","gray");
			$(this).css("color","blue");
			$("#event").text("Double Clicked");
		},
		mouseenter:function(){
			$(this).css("background-color","#86a77d");
			$(this).css("color","yellow");
			$("#event").text("Mouse enter");
		},
		mouseout:function(){
			$(this).css("background-color","#777");
			$(this).css("color","black");
			$("#event").text("Mouse out");
			
		},
	});


	$("#paragraphButton").dblclick(function(){
				$("p").toggle(500);
				// $("p").toggle(700);
				i++;
				if(i%2!=0)
					$("#paragraphButton").text("Show Paragraph");
				else
					$("#paragraphButton").text("Hide Paragraph");
				$("#event").text("Double Clicked");
			
		});

	

	//----------------------Nav menu ------------------------------------
	$("#h").click(function(){
		$("#home").slideDown(10);
	
		$("#register").css("display","none");
		$("#about").css('display','none');
		$("#contact").css('display','none');
		
			
	})
	
	$("#r").click(function(){
		$("#register").slideDown(10);
		
		$("#home").css('display','none');
		$("#about").css('display','none');
		$("#contact").css('display','none');
	})
	
	$("#c").click(function(){
		$("#contact").slideDown(10);
	
		$("#home").css('display','none');
		$("#about").css('display','none');
		$("#register").css('display','none');
	
	})
	
	$("#a").click(function(){
		$("#about").slideDown(10);

		$("#home").css('display','none');
		$("#register").css('display','none');
		$("#contact").css('display','none');
		
	})

// --------------------------Animation----------------------------------
	$("#animateButton").click(function(){
		$("#animateDiv").animate({left:'+=400px'},1000,function(){$(this).css('background-color','red');}).animate({left:'+=200px'},500);
	});	
	$("#stopButton").click(function(){
		$("#animateDiv").stop();
	});
	$("#resetButton").click(function(){
		$("#animateDiv").stop();
		$("#animateDiv").animate({left:'10px'},200,function(){$(this).css('background-color','blue');});
		
	});

// ---------------------Accordion Menu---------------------------------	


	$("#accord").accordion();
//------------------------Content--------------------------------
	
	//-------------get text---------
	$("#showTxt").click(function(){
		alert("Text inside div:"+$('#tags').text());
	});
	$("#showHtml").click(function(){
		alert("Code inside div:"+$('#tags').html());
	});
	$("#getVal").click(function(){
		alert("Feild Value:\n"+$('#name').val());
	});
		//-------set text---------
	$("#setTxt").click(function(){
		$('#tags').text("Cool Developer");
	});
	$("#setHtml").click(function(){
		$('#tags').html('<em>Cool</em> <b>Developer</b>');
	});
	$("#setVal").click(function(){
		$('#name').val('Superb Shetty');
	});
// -------------------------    ------------------------------
	
});