<!doctype html>
<html lang="en">
<head>
    <title>Home Page</title>
<?php 
    include('partials/_html_header.php');?>
</head> 

<body>
    <?php  include('partials/_sign_nav.php'); ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../assets/img/main04.jpg">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div id="first_caro" class="col-md-11">
                                <h1 class"navbar-left">Welcome to Dashboard</h1>
                                <p class="p-cap">Please sign in to view messages and comments</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <a id ="signin-button" class="btn btn-danger btn-lg" href="/signin" role="button">Signin</a>
                            </div>
                        </div>
                    </div> <!-- end of container -->
                </div> <!-- end of carousel-caption -->       
            </div> <!-- end of item 1 -->
            
            <div class="item">
                <img src="../assets/img/main05.jpg">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div id="second_caro" class="col-md-11">
                                <h1 class"navbar-left">Register</h1>
                                <p class="p-cap">Please register to create an account</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <a id ="signin-button" class="btn btn-danger btn-lg" href="/signin" role="button">Register</a>
                            </div>
                        </div>
                    </div> <!-- end of container -->
                </div> <!-- end of carousel-caption -->       
            </div> <!-- end of item 2 -->
            
            <div class="item">
                <img src="../assets/img/main06.jpg">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div id="third_caro" class="col-md-11">
                                <h1 class"navbar-left">A simple social media platform</h1>
                            </div>
                        </div>
                    </div> <!-- end of container -->
                </div> <!-- end of carousel-caption -->       
            </div> <!-- end of item 3 -->

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>    
    </div> <!-- end of carousel slide -->

    <div id="panel" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Manage Users</h3>
                    </div>
                    <div class="panel-body">
                        Using this application, You'll learn how to add, remove, and edit users from the application
                    </div>
                </div> <!-- end of panel -->
            </div> <!-- end of column -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Leave messages</h3>
                    </div>
                    <div class="panel-body">
                        Users will be able to leave a message to another user using this application.
                    </div>
                </div> <!-- end of panel -->
            </div> <!-- end of column -->
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit User Information</h3>
                    </div>
                    <div class="panel-body">
                        Admins will be able to edit another user's information (email address, firstname, lastname, etc).
                    </div>
                </div> <!-- end of panel -->
            </div> <!-- end of column -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->

    <footer class="footer">
        <div class="container">
            <p id="footer-text"><small>Developed & Designed by Cindy Jo from scratch | Copyright © Cindy Jo 2015 All rights reserved</small></p>
        </div>
    </footer>
</body>
</html>
