<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
<?php 
    include('partials/_html_header.php');?>


</head>
<body>
<?php 	include('partials/_sign_nav.php'); ?>

	<div class="container">
<?php   if(!empty($this->session->flashdata('errors')))
        {   ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="errors">
<?php               echo $this->session->flashdata('errors'); ?>                   
                </div>
            </div>
<?php   }?>
		<div class="row user-panel">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="header">Join Dashboard today.</h2>
					</div>
					<div class="panel-body">
                		<form action="/user_register" method="post">
<?php               		include('partials/_form_add_register.php');?>
							<button id="register_button" type="submit" class="btn btn-default pull-right">Register</button>
						</form>
						<a href="/login">Already have an account? Login</a>
					</div>
				</div> <!-- end of panel -->
			</div> <!-- end of column-->
		</div> <!-- end of row user-panel -->
	</div> <!-- end of conainer -->
<?php 
    include('partials/_footer.php');?>
</body>
</html>
