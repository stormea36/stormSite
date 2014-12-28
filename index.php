<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/components/header.php";
require_once($path);
?>
<style>
            html {
                background: url(/images/coffee_wall.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            body {
                background-color: transparent;
            }
            .page-header {
                border: none;
            }
            .page-header h1 {
                color: #c7254e;
                font-family: 'Rancho', cursive;
                font-size: 90px;
            }
        </style>
        <div class='row'>
            <div class='col-lg-12'>
                
            </div>
        </div>
            <div class='row'>
                <div class='col-lg-12'>
                    
                    <div class="jumbotron">
                        
                        <span>
                            <img src="images/storm_avatar.jpeg" width="200px" alt="storm" style="float: left; margin-right: 20px;" />
                            <h1 class='page-header'>Hello World, I am <em>Storm</em></h1>
                            <p>
                                That is my name and I am here to change the world.  Follow
                                me to see how we can make this world a better place, together.
                            </p>
                            <p><a class='btn btn-primary btn-lg'>Learn More</a></p>
                        </span>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-lg-6'>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Where I've Been</h3>
                        </div>
                        <div class="panel-body">
                            <img src='images/idea_door.jpg' width='100%'/>
                        </div>
                    </div>
                </div>
                <div class='col-lg-6'>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Where we can go</h3>
                        </div>
                        <div class="panel-body">
                            <p class='lead'>It is up to us, to make the decisions that matter most, now and so forward,
                                that will help our species be able to continue to prosper and support ourselves and other species on this earth.
                                Significant barriers will be erected, but with determination and dedication to supporting what is
                                <em>right</em>, not what is profitable, will we be able to succeed.</p>
                            <h3>Examples of my work</h3>
                            <p><a href="components/landingPageEx.php">Full page photo</a></p>
                            <p><a href="components/clouds.php">Clouds CSS3</a></p>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        
        

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/components/footer.php";
require_once($path);
?>