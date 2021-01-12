<!--
<?php
include('config/db_connect.php');
?>
-->
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<form method="post" action="login2.php">
    <?php include('errors.php'); ?>
    

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
              <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.html" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">HU</span><span class="color_white">CTF</span></h3>
                        </a>
                    </div>-->
                    <div class="navbar-nav ml-auto">
                        <a href="back.php" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="about.php" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="hackerboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                        <a href="loginteam.php" class="p-3 text-decoration-none text-white bold">Login</a>
                        <a href="regteam.php" class="p-3 text-decoration-none text-light bold">Register</a>
                    </div>
                <!--</div>-->
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="">
            <div class="row">
                <div class="col-xl-8">
                    <h1 class="display-1 bold color_white content__title"><span class="color_danger">HU</span><span class="color_white">CTF</span><span class="vim-caret">&nbsp;</span></h1>
                   
                        <div class="text-grey text-spacey hackerFont lead ">Type your credentials</div>
                        <div class="text-grey text-spacey hackerFont lead mb-5">to conquer the world</div>

                    <div class="row hackerFont">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                <small id="passHelp" class="form-text text-muted">Make sure nobody's behind you</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" name="login_user">
                    <h4>Login</h4>
                    </button>
                    <small id="registerHelp" class="mt-3 form-text text-muted">Not Registered? <a href="register2.php">Register here</a></small>
                    <small id="team" class="mt-2 form-text text-muted">Are You Part Of A Team! <a href="loginteam.php">Login</a></small>
                </div>
            </div>
        </div>
    </div>



<?php include('templates/footer.php'); ?>

</html>