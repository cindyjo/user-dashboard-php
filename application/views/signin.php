<!doctype html>
<html lang="en">
<head>
    <title>Signin Page</title>
<?php 
    include('partials/_html_header.php');?>


</head>
<body id = "background">
	<div class="container">
<?php 	include('partials/_sign_nav.php'); 
		if(!empty($this->session->flashdata('errors')))
		{ ?>
			<div class="row" >
				<div class="col-md-4" id="errors"> 
<?php 				echo $this->session->flashdata('errors'); ?>
				</div>
			</div>
<?php	} 
		if(!empty($this->session->flashdata('success')))
		{ ?>
			<div class="row" >
				<div class="col-md-4" id="success"> 
<?php 				echo $this->session->flashdata('success'); ?>
				</div>
			</div>
<?php	} ?>
		<div class="row">
			<div class="col-md-4">
				<h4 id="signin_header">Signin</h4>
				<form action="/login" method="post">
					<div class="form-group">
						<label for="email">Email Address:</label>
						<input type="email" class="form-control" name="email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
						<button id="signin_button" class="btn btn-default navbar-right">Sign In</button>
				</form>
				<a href="/register">Don't have an account? Register</a>
			</div>
		</div>
	</div>
</body>
</html>
