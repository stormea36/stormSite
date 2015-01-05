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

        
        <div class="container">
            <div class="row">
                
                <div class="trans_box jumbotron">
                    <div class="page-header">
                        <h1 style="">Welcome to Full Screen!</h1>
                    </div>
                    <div>
                        <p>It is an age of new subjects to talk about, new items to discuss, and difficult times to face.
                        We can face them, together as a team and with respect for each opinion, or we may crumble under our
                        structure of indifference and refuse to acknowledge each others beliefs.</p>
                    </div>
                </div>
            </div>
        </div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/components/footer.php";
require_once($path);
?>