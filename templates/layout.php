<!DOCTYPE html>
<html lang="en">
<?php 
//if(isset($_SESSION['id']) ) {
   // dump($_SESSION['id']);
//}
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Finder</title>

    <link rel="stylesheet" href="public/css/styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<section class="head-area">
        <div  class="container menu-area">
            <div class="row">
                <div class="col-4">
                    <a href="/">Jobs<strong>FINDER</strong></a>
                </div>
                <div class="col-8 col-md-8">
                    <ul>
                        
                        <?php
                            echo empty(isset($_SESSION['id'])) ? '<li><a href="/?action=login">Login</a></li>' : '<li>Logged in: <a href="/?action=profiles">'.$_SESSION['name'].'</a></li>';
                        ?>
                        <li>
                            <?php if(isset($_SESSION['id'])) {
                                echo '<a href="/?action=logout" class="head-area__btn">Log out</a>';
                            } else {
                                echo '';
                            }

                            ?>
                        </li>
                        <li class="d-none d-md-block">
                            <?php if(isset($_SESSION['id'])) {
                                echo '';
                            } else {
                                echo '<a href="/?action=register">Register</a>';
                            }

                            ?>
                        </li>
                        <li class="d-none d-md-block"><a href="/?action=contact">Contact</a></li>
                        <li class="d-none d-md-block">
                            <!--  -->
                            <?php 
                            if(isset($_SESSION['userGrants'])) {
                               if($_SESSION['userGrants'] == 1){
                                   echo '<a href="/?action=create" class="head-area__btn"> Post a Job</a>';
                               }
                            }

                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <?php
        include_once("templates/pages/$page.php");
    ?>


    <footer class="mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center text-md-left">
                    <a href="#">Jobs<strong>FINDER</strong></a>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <p> 440 Acacia Street<BR>
                        Brooklyn, NY 11234 </p>
                </div>
                <div class="col-12 col-md-4 text-right">
                    <a href="#top"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Custom JS -->
    <script src="public/js/custom.js"></script>


</body>

</html>






<!-- 
<html>
<body>
    <div>
    <a href="/">strona glowna</a>
    <a href="">podstrona create</a>
    </div>
    <div>
       
    </div>
    <div><h1>footer</h1></div>
</body>

</html> -->