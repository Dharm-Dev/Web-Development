<!DOCTYPE html>
<html>
<head>
	<title>Gallary</title>
	<meta charset="utf-8">
	<meta name="ViewPort" content="width=device-width , initial-scale=1">
	

	<style type="text/css">
		body{
			background-color: #777; 
		}
		#container{
			background-color: #333; 
		}
		#thumbnail{
			height: 80px;
			width: 80px;
			margin: 10px;
		}
		#thumbnail:hover{
			border: 2px solid #39ff14;
		}
		#preview{
			height: auto;
			margin-top: 1.5em;
			}
		#bigpic{
		/*	padding: 0.5em;*/
			max-height: 200px;
			max-width:300px;
			position: absolute;
			background-color: #8833ff;
			border:4px double #8833da;
		}
		
		h1{
			word-spacing: 12px;
		}
		span{
			color:red;
			font-size: 5vh;
			margin:0 2px 0 0;
			font-family: sans-serif;
			font-weight: 600;
			text-transform: uppercase;
			text-shadow: blue;
		}
		
	</style>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
				$("#bigpic").draggable();
		});
		
	</script>
<body>
<?php
	$pre="Mountains/";
	$Iname=array('mount1','mount2','mount3','mount4','land1','land2','land3','land4','night1','night2','night3','night4');
	$ext=".jpg";
	$image="<img id='thumbnail' onmouseover=\"preview.src=this.src\" src= ".$pre;
	
?>
			
<a href='index.php'>CLick Here for <span>J</span>query</a>
<h1><center><span>G</span>allary <span>V</span>iew</center></h1>
	<div id='container' align="center">
		<?
			foreach($Iname as $j)
				echo $image.$j.$ext." >";
		?>
	</div>
	
	<div id='preview' align="center">
		<img name='preview' id='bigpic' src='Mountains/mount3.jpg' onmouseover="clear()" onmouseout="image()">
	</div>
</body>
</html>