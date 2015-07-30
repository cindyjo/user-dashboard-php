<!doctype html>
<html lang="en">
<head>
  <title>Home Page</title>
<?php 
  include('partials/_html_header.php');?>
</head> 
<body id = "background">
  <div class="container">
<?php 	include('partials/_sign_nav.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h2>Welcome to the Test</h2>
          <p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
          <p><a id ="start_button" class="btn btn-primary btn-lg" href="/signin" role="button">Start</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h4>Manage Users</h4>
        <p>Using this application, You'll learn how to add, remove, and edit users from the application</p>
      </div>
      <div class="col-md-4">
        <h4>Leave messages</h4>
        <p>Users will be able to leave a message to another user using this application.</p>
      </div>
      <div class="col-md-4">
        <h4>Edit User Information</h4>
        <p>Admins will be able to edit another user's information (email address, firstname, lastname, etc).</p>
      </div>
    </div>
  </div>
</body>
</html>
