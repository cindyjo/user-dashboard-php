<!doctype html>
<html lang="en">
<head>
    <title>Login Page</title>
<?php 
    include('partials/_html_header.php');?>
</head>
<body>
<?php 	include('partials/_sign_nav.php'); ?>
	<div class="container login-main">
<?php 	if(!empty($this->session->flashdata('errors')))
		{ ?>
			<div class="row" >
				<div class="col-md-4 col-md-offset-4" id="errors"> 
<?php 				echo $this->session->flashdata('errors'); ?>
				</div>
			</div>
<?php	} 
		if(!empty($this->session->flashdata('success')))
		{ ?>
			<div class="row" >
				<div class="col-md-4 col-md-offset-4" id="success"> 
<?php 				echo $this->session->flashdata('success'); ?>
				</div>
			</div>
<?php	} ?>
		<div class="row user-panel">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
					 	<h2 class="header" class="panel-title">Log in to Dashboard</h2>
					</div>
					<div class="panel-body">
						<form action="/login" method="post">
							<div class="form-group">
								<label for="email">Email Address:</label>
								<input type="email" class="form-control" name="email" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<button class="btn btn-default pull-right">Log In</button>
						</form>
						<a href="/register">Don't have an account? Register</a>
					</div>
				</div> <!-- end of panel -->
			</div> <!-- end of column -->
		</div> <!-- end of row login-panel -->
	</div> <!-- end of conainer login-main -->
<?php 
    include('partials/_footer.php');?>
</body>
</html>
