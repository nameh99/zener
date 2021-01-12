<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

   <div id="preloader">
    </div>

    <div id="main">
        <div class="glitch" >
            <div class="glitch__img glitch__img_404"></div>
            <div class="glitch__img glitch__img_404"></div>
            <div class="glitch__img glitch__img_404"></div>
            <div class="glitch__img glitch__img_404"></div>
            <div class="glitch__img glitch__img_404"></div>
        </div>
        <div class="navbar-dark text-white">
            <div class="container">
                <nav class="navbar px-0 navbar-expand-lg navbar-dark">

                        <div class="navbar-nav ml-auto">
                            <a href="back.php" class="p-3 text-decoration-none text-white bold">Home</a>
                            <a href="about.php" class="p-3 text-decoration-none text-light bold">About</a>
                            <a href="hackerboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                            <a href="loginteam.php" class="p-3 text-decoration-none text-light bold">Login</a>
                            <a href="regteam.php" class="p-3 text-decoration-none text-light bold">Register</a>
                        </div>
                   
                </nav>
                
            </div>
        </div>

        <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
            <div class="">
                <div class="row">
                    <div class="col-xl-8">
                        <h1 class="display-1 bold color_white content__title"><span class="color_danger">HU</span><span class="color_white">CTF</span><span class="vim-caret">&nbsp;</span></h1>
                        <h1 class="display-1 bold color_white content__title2">HACKERS Uni</h1>
                        <!--<h1 class="display-1 bold color_white content__title2">SPACE</h1>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <p class="mt-5 text-grey text-spacey hackerFont lead">
                           <div class="mt-5 text-grey text-spacey hackerFont lead"> The quieter you become the more you are able to hear.</div>
                           <!--<div class="text-grey text-spacey hackerFont lead"> become the more you</div>
                           <div class="text-grey text-spacey hackerFont lead"> are able to hear.</div>-->
                        </p>
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='log_choice.php'})();">
                            <h4>Login</h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('templates/footer.php'); ?>

</html>