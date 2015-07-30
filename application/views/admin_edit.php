<!doctype html>
<html lang="en">
<head>
    <title>Edit User</title>
<?php 
    include('partials/_html_header.php');?>

</head>
<body id = "background">
	<div class="container">
<?php 	include('partials/_dashboard_profile.php'); ?>
		<div class="row">
			<div class="col-md-10">
				<h4 id="admin_header">Edit User #<?=$id?></h4>
			</div>
			<div class="col-md-2">
				<a href="/admin"><button type="button" class="btn btn-default navbar-right">Return to Dashboard</button></a>
			</div>
		</div>
<?php	if(!empty($this->session->flashdata('errors')))
		{
			echo $this->session->flashdata('errors');
		}?>

		<div class="row">
			<div class="col-md-6">
				<h5>Edit Information</h5>
				<form action="/admin_edit_information/<?=$id?>" method="post">
					<div class="form-group">
						<label for="email=">Email address: </label>
						<input type="email" class="form-control" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
						<label for="first_name">First Name: </label>
						<input type="text" class="form-control" name="first_name" value="<?=$first_name?>">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name:</label>
						<input type="text" class="form-control" name="last_name" value="<?=$last_name?>">
					</div>
					<label>User Level: </label>
					<select name = "user_level" class="form-control">
						<option>Normal</option>
						<option>Admin</option>
					</select>
					<button type="submit" class="btn btn-default navbar-right">Save</button>
				</form>
			</div>
			<div class="col-md-6">
				<h5>Change Password</h5>
				<form action="/admin_edit_password/<?=$id?>" method="post">
<?php 				include('partials/_change_password.php'); ?>
				</form>
			</div>
		</div>

	</div>
</body>
</html>
