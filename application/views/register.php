<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
<?php 
    include('partials/_html_header.php');?>


</head>
<body id = "background">
	<div class="container">
<?php 	include('partials/_sign_nav.php'); 
        if(!empty($this->session->flashdata('errors')))
        {   ?>
            <div class="row">
                <div class="col-md-4" id="errors">
<?php               echo $this->session->flashdata('errors'); ?>                   
                </div>
            </div>
<?php   }?>
		<div class="row">
			<div class="col-md-4">
				<h4 id="register_header">Register</h4>
                <form action="/user_register" method="post">
<?php               include('partials/_form_add_register.php');?>
					<button id="register_button" type="submit" class="btn btn-default navbar-right">Register</button>
				</form>
				<a href="/signin">Already have an account? Login</a>
			</div>
		</div>
	</div>
</body>
</html>
