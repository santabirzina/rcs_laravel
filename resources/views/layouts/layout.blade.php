<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amber Balloons</title>
	<meta name="description" content="">
	<meta name="keyword" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="http://new.amberballoons.com/css/style.css" rel="stylesheet">
	<link href="http://new.amberballoons.com/js/scripts.js" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>

<!--Start of Tawk.to Script
	
<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/56c34c1b1411b5ca245adb2c/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
})();

</script>
End of Tawk.to Script-->

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
		<div class="container">
			<a class="navbar-brand mr-5" href="/">
				<img src="http://new.amberballoons.com/img/amber_logo_210.png">
			</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active nav-text"><a class="nav-link" href="#">BALLON EXPERIENCE</a></li>
					<li class="nav-item active nav-text"><a class="nav-link" href="/faq">QUESTIONS
							<span style="font-weight:normal;">&amp;</span>
							ANSWERS</a></li>
					<li class="nav-item active nav-text"><a class="nav-link" href="/bookflight">BOOK YOUR FLIGHT</a></li>
				</ul>
			</div>



			<!--call-->
			<div class="text-right call">
				<span class="call-blue"><i class="fab fa-whatsapp"></i></span>
				<span class="call-whatsapp"><i class="fab fa-whatsapp"></i></span>
				<div>
					<a class="call-nav" href="#"><span style="font-weight:normal;">+371</span>&nbsp;22&nbsp;411&nbsp;211</a>
				</div>
			</div>




		</div>



	</nav>

	<div>

        @yield('content')
    
    </div>


	<!--- Footer -->

	<footer>
		<div class="container">
		
			<div class="row ">
				<div class="col-md-6">
					<div class="social px-5">
						<p class="m-1">+371&nbsp;22&nbsp;411&nbsp;211</p>
						<p class="m-1"><a href="mailto:fly@amberballoons.com">fly@amberballoons.com</a></p>

						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>

						 
					</div>
					<div class="px-5 pt-2">
					<?php
					echo "Amber balloons ";
					?>
					&copy; <?php 					
					echo date("Y") ;
					echo " Developed by Santa"
					?>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="no-padding-bottom text-right">
						<img src="#">
						<img src="#">
					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="row pos-relative">
				<div class="chat">
					<div class="bg-orange p-3">
						<p class="footer-chat m-0 "><a href="#">Click to chat</a></p>
					</div>
				</div>
			</div>
		</div>


	</footer>




</body>

</html>