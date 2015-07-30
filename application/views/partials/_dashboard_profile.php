<div class="row">
	<div class="col-md-10">
		<ul class="nav nav-pills">
			<li><h4>Test App</h4></li>
<?php 		if($this->session->userdata['logged_user']['user_level'] === 'Normal')
			{ ?>
				<li role="presentation"><a class = "header_nav" href="/dashboard">Dashboard</a></li>
				<li role="presentation"><a class = "header_nav" href="/users_edit">Profile</a></li>
<?php		}
			if($this->session->userdata['logged_user']['user_level'] === 'Admin')
			{ ?>
				<li role="presentation"><a class = "header_nav" href="/admin">Dashboard</a></li>
				<li role="presentation"><a class = "header_nav" href="/users_edit">Profile</a></li>
<?php 		} ?>
		</ul>
	</div>
	<div class="col-md-2">
		<ul class="nav nav-pills navbar-right">
				<li id = "log_off" role="presentation"><a class = "header_nav" href="/logoff">Log Off</a></li>
			</ul>
	</ul>
	</div>
</div> <!--end of row-->
<div class="bar"></div>