<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- bootstrap javascript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body id = "background">
	<div class="container">
<?php 	include('partials/_dashboard_profile.php'); 
		    if(!empty($this->session->flashdata('success')))
    { ?>
      <div class="row" >
        <div class="col-md-4" id="success"> 
<?php         echo $this->session->flashdata('success'); ?>
        </div>
      </div>
<?php } ?>
    <div class="row">
			<div class="col-md-12">
				<h4 id="admin_header">All Users</h4>
			</div>	
		</div>
		
    <div>
			<table id ="users_table" class="table table-bordered">
  				<tr>
  					<th>ID</th>
  					<th>Name</th>
  					<th>Email</th>
  					<th>Created_at</th>
  					<th>User_level</th>
  				</tr>
<?php     if(isset($user_list))
          {    
            foreach($user_list AS $row)
            { ?>
              <tr>
<?php           include('partials/_user_table.php'); ?>
              </tr>
<?php       }
          } ?>
			</table>
		</div>

		</div>
	</div>
</body>
</html>
