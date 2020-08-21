
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" intial-scale="0.1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-dropdownhover.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<header id="header">
	</header>
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" class="btn btn-info" data-toggle="collapse" data-target="#ritzz">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div>
		</nav>

		<header id="header">
	</header>
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" class="btn btn-info" data-toggle="collapse" data-target="#ritzz">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
					<img src="img/logo.jpg">
				</div>
				</div>		

				<div class="collapse navbar-collapse" id="ritzz">
					<ol class="nav navbar-nav navbar-right ">
						<li>
							<a href="index.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="about_us.html"><b>About Us</b></a>
						</li>
						<li>
							<a href="contact.html">
								Contact Us
							</a>	
						</li>
						<li>
							<a href="GU_CLUBS.html">
								TEAM
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-search" aria-hidden="true"></i>
							</a>
						</li>
					</ol>
					
				</div>
			</div>
		</nav>
	<div class="reg">
		<div class="row" style="width: 100%;" align="center">
			<i class="fa fa-hashtag fa-5x" style="color: white;margin-top: 100px; size: 100px;"><b>Clubs Registration Form</b></i>
		</div>

		<div id="ram">
			<?php
				echo form_open();
				echo form_label('Name:');
				echo form_input('name'=>'na', 'palaceholder'=>'enter name','class'=>'form-control');
				echo br(2);
				echo form_label('Email:');
				echo form_input('name'=>'email', 'palaceholder'=>'enter email','class'=>'form-control');
				echo br(2);
				echo form_label('Mobile');
				echo form_input('name'=>'moblie', 'palaceholder'=>'enter mobile no','class'=>'form-control');
				echo br(2);
				echo form_label('Branch:');
				echo form_input('name'=>'branch', 'palaceholder'=>'enter branch','class'=>'form-control');
				echo br(2);
				echo form_label('Club:');
				echo form_input('name'=>'club', 'palaceholder'=>'enter club','class'=>'form-control');
				echo br(2);
				echo form_label('Semester:');
				echo form_input('name'=>'sem', 'palaceholder'=>'enter emester','class'=>'form-control');
				echo br(2);
				echo form_input(['type'=>'submit','value'=>'submit']);
			?>
		</div>
	</div>
	



		
</body>
</html>
