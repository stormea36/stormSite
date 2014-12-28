<?php
$local = $_SERVER['DOCUMENT_ROOT'];
include_once($local);
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Storm Anderson</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../css/main.css" />
        <link type="text/css" rel="stylesheet" href="../css/clouds.css" />
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600italic|Rancho' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:600,400' rel='stylesheet' type='text/css'>
        <style>
            html {
                background: url(images/coffee_wall.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>

    <body>
        
        <div class='container'>


            <nav class="navbar navbar-inverse navbar-fixed-top" role='navigation'>

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php">Storm Media</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Examples <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="components/components/clouds.php">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </nav>



