<!--
<?php
include('config/db_connect.php');
$username = "";
$email    = "";
$errors = array();
?>
-->
<!DOCTYPE html>
<html lang="en">


<?php include('templates/header.php'); ?>

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
                        <a href="loginteam.php" class="p-3 text-decoration-none text-light bold">Login</a>
                        <a href="regteam.php" class="p-3 text-decoration-none text-white bold">Register</a>
                    </div>
                <!--</div>-->
            </nav>


        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="" action="register.php" method="POST">
            <div class="row">
                <div class="col-xl-10">
                    <h1 class="display-1 bold color_white content__title"><span class="color_danger">HU</span><span class="color_white">CTF</span><span class="vim-caret">&nbsp;</span></h1>
                 
                       <div class="text-grey text-spacey hackerFont lead "> Join the community and be part of</div>
                       <div class="text-grey text-spacey hackerFont lead "> the future of the information </div>
                       <div class="text-grey text-spacey hackerFont lead mb-5">security industry.</div>

                    <div class="row  hackerFont">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="team name" placeholder="Team Name" >
                                <small id="reciept_id_help" class="form-text text-muted">Let it be weird and unique :)</small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>">
                                <small id="reciept_id_help" class="form-text text-muted">Note: You can only create one team per account</small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>">
                                <small id="reciept_id_help" class="form-text text-muted">Don't use your real name #Stay Anonymous :)</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass1" placeholder="Password">
                                <small id="passHelp" class="form-text text-muted">Make sure nobody's behind you</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass2" placeholder="Confirm Password">
                            </div>
                           
                            <div class="custom-control custom-checkbox my-4">
                                <input type="checkbox" class="custom-control-input" id="solemnly-swear">
                                <label class="custom-control-label" for="solemnly-swear">I solemnly swear that I am up to no good.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" name="reg_team">
                            <h4>Register</h4>
                    </button>
                    <small id="registerHelp" class="mt-2 form-text text-muted">Already In A Team?<a href="loginteam.php">Login here</a></small>
                    <small id="registerHelp" class="mt-2 form-text text-muted">Register In An Existing Team <a href="regpartofteam.php">Register here</a></small>
                </div>
            </div>
        </div>
    </div>


<?php include('templates/footer.php'); ?>

</html>