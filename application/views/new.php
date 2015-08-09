<!doctype html>
<html lang="en">
<head>
    <title>New User</title>
<?php 
    include('partials/_html_header.php');?>
</head>

<body id = "background">
	<div class="container">
<?php 	include('partials/_dashboard_profile.php'); ?>
		<div class="row">
			<div class="col-md-10">
				<h4 id="new_header">Add a new user</h4>
			</div> <!-- end of column -->
			<div class="col-md-2" >
				<a href="/admin"><button class="btn btn-default navbar-right">Return to Dashboard</button></a>
			</div> <!-- end of column -->		
		</div> <!-- end of row -->
		<div class="row">
			<div class="col-md-4">
                <form action="/user_register" method="post">
<?php               include('partials/_form_add_register.php'); ?>
				    <button id="create_button" type="submit" class="btn btn-default navbar-right" >Create</button>
				</form>
			</div> <!-- end of column -->
		</div> <!-- end of row -->
	</div> <!-- end of conainer -->
<?php 
    include('partials/_footer.php');?>
</body>
</html>
