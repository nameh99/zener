<!--
<?php 
  #session_start(); 

  #if (!isset($_SESSION['username'])) {
    #$_SESSION['msg'] = "You must log in first";
    #header('location: login2.php');
  #}
  #if (isset($_GET['logout'])) {
    #session_destroy();
    #unset($_SESSION['username']);
    #header("location: login2.php");
  #}
?>
-->

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

   <!-- <div id="preloader">
    </div>

    <div id="main">-->
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
                            <a href="index2.php" class="p-3 text-decoration-none text-white bold">Home</a>
                            <a href="profile.php" class="p-3 text-decoration-none text-light bold">Profile</a>
                            <a href="yourboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                            <a href="challenges.php" class="p-3 text-decoration-none text-light bold">Challenges</a>
                            <a href="logout.php" class="p-3 text-decoration-none text-light bold">Logout</a>
                        </div>
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
                            <div class="mt-5 text-grey text-spacey hackerFont lead">"The true ninja doesn't make a splash at all."</div>
                           <!-- <div class="text-grey text-spacey hackerFont lead">doesn't make a</div>
                            <div class="text-grey hackerFont lead">splash at all."</div> -->                           
                            <div>-<strong><?php echo $_SESSION['username']; ?></strong>-</div>
                        </p>
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='logout.php'})();">
                            <h4>Logout</h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php include('templates/footer.php'); ?>

</html>