<!doctype html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
<?php 
    include('partials/_html_header.php');?>

</head>
<body id = "background">
<!--  	<?=var_dump($messages[0])?> -->
	<div class="container">
<?php 	include('partials/_dashboard_profile.php'); ?>
		<div class="row">
			<div class="col-md-12">
				<h4 id="user_name"><?=$first_name?> <?=$last_name?></h4>
				<p><span class="info">Registered at: </span><?=$created_at?></p>
				<p><span class="info">User ID: </span>#<?=$id?></p>
				<p><span class="info">Email address: </span><?=$email?></p>
				<p><span class="info">Description: </span><?=$description?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><?=$this->session->userdata['logged_user']['first_name']?>! Leave a message for <?=$first_name?> <?=$last_name?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form action="/post_message/<?=$id?>" method="post">
					<div class="form-group"> 
						<textarea class="form-control" id="message" name="message"></textarea>
						<input type="hidden" name="owner_id" value="<?=$id?>">
					</div> 
					<button type="submit" class="btn btn-default navbar-right">post</button>
				</form>
			</div>
		</div>
<?php  	if(!empty($messages))
		{
			foreach($messages AS $row)
			{?>
				<div class="row">
					<div class="col-md-10">
						<p><?=$row['name']?> wrote</p>
					</div>
					<div class="col-md-2 navbar-right">
						<p><?=$row['created_at']?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="post_message"><?=$row['message']?></p>
					</div>
				</div>
		
<?php 			foreach($row['comments'] AS $comment)
				{?>
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-9">
							<p><?=$comment['name']?> wrote</p>
						</div>
						<div class="col-md-2 navbar-right">
							<p><?=$comment['created_at']?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<p class="post_comment"><?=$comment['comment']?></p>
						</div>
					</div>
<?php			}?>
				
				<div class = "row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<form action="/post_comment/<?=$id?>" method="post">
							<div class = "row">
							<div class="form-group"> 
								<textarea class="form-control" id="comment" name="comment"></textarea>
								<input type="hidden" name="message_id" value="<?=$row['id']?>">
							</div> 
							<button type="submit" class="btn btn-default navbar-right">post</button>
						</form>
					</div>
				</div>
<?php 		}
		} ?>
	</div>	
</body>
</html>
