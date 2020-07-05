<!DOCTYPE html>
<html>
<head>
	<title>Hello JQuery!</title>
	<meta charset="utf-8">
	<meta name="ViewPort" content="width=device-width , initial-scale=1">
	
	<!-------------------- jquery files -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<!--------------- special jquery effects file such as draggable,accordian -->
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<!-------- Source file of jquery effects -------------------------------->
	<script src="jquery.js"></script>

<!-- ----------------Source style sheet  ------------------>
	<link rel="stylesheet" type="text/css" href="style.css">
<!-- ---------link for stylesheet used in accordian menu --------------------->
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
	<!-- ------------------Heading---------------------------- -->
	<h2><center><span>J</span>query <span>E</span>vents</center></h2>	
	<!-- -----------------Navigation ----------------- -->
	<nav>
		<a class='navlink' href='mouseEvents.html'>Home</a>
		<a class='navlink' id='r'>Register</a>
		<a class='navlink' id='c'>Contact</a>
		<a class='navlink' id='a'>About us</a>
		<div id='subm'>
			<ul id='contact'>
				<li>Email</li>
				<li>Mobile</li>
				<li>Branch Address</li>
			</ul>	
			<ul id='register'>
				<li>New User</li>
				<li>Existing User</li>
				<li>Guest User</li>
			</ul>	
			<ul id='home'>
				<li>Slider</li>
			</ul>	
			<ul id='about'>
				<li>UI Developer</li>
				<li>Designer</li>
				<li>Back End Developer</li>
			</ul>	
		</div>
	</nav>
<!-- ----------------------------------------------------------------------- -->
	<!-- Accordian Menu-->
	<div id='accord'>
			<!---------------------- Menu 1 ------------------------>
		<div>BootStrap Demo</div>
			<div>
				<img id='imgfirst' src='Logo/bootstrap.jpg'/>
				<a id='afirst' href='index.html'>CLick Here for Bootstap</a>
			</div>

			<!---------------------- Menu 2 ----------------------->
		<div>Paragraph Events</div>
			<div>
				<div id='event'>
					Event Performed will appear here
				</div>
					
				<p> 
					Lorem ipsum dolor sit amet, consectetur 	adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<button id='paragraphButton'>
						Double click to <b>Hide/Show</b> Paragraph
				</button>
			</div>
		<!------------------------- menu 3 Animation --------------->
		<div>Animation</div>
			<!-- Animate JS starts -->
			<div id='animation'>	
				<div id='animateDiv'></div>
				<div align="center">
					<button id='resetButton'>Reset</button>
					<button id='animateButton'>Animate</button>
					<button id='stopButton'>Stop</button>
				</div>
			</div>
			<!------------------------ Menu 4 Jquery content---------------------->
		<div>Jquery Get Content</div>
			<div>
				
				<div id='tags'>
					Hello <big>e</big>veryone <b>!</b>
				</div>
				<div>
					<button id='showTxt'>Show Text</button>
					<button id='showHtml'>Show HTML</button>
					<button id='setTxt'>Set Text</button>
					<button id='setHtml'>Set HTML</button>
				</div>
				<br>
				<input type="text" id='name' placeholder="Your Name Please" />
				<br>
				<div>
					<button id='getVal'>Show Value</button>
					<button id='setVal'>Set Value</button>
				</div>
		</div>
	
			<!--------------------Menu 5  ------------------------------>
		<div>Gallary</div>
			<div>
				<img id='imgfirst' src='Mountains/mount1.jpg'/>
				<a id='afirst' href='gallary.html'>CLick Here for gallary</a>
			</div>

	</div>

<!-- ----------------------------------------------------------------------- -->
<footer>Practice For Web Developer</footer>

</body>
</html>