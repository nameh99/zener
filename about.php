<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

    <div class="glitch">
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
        <div style="position: fixed;" class="glitch__img"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.html" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">HU</span><span class="color_white">CTF</span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="back.php" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="about.php" class="p-3 text-decoration-none text-white bold">About</a>
                        <a href="hackerboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                        <a href="loginteam" class="p-3 text-decoration-none text-light bold">Login</a>
                        <a href="regteam.php" class="p-3 text-decoration-none text-light bold">Register</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">ABOUT</span>US<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey text-center hackerFont lead">
                        A community of like minded individuals who support cybersecurity and FOSS.
                    </p>
                    <div class="row justify-content-center hackerFont">
                        <div class="col-md-8">
                            <h5 class="bold color_white pt-3">
                                What is Capture the Flag?
                            </h5>
                            A capture the flag (CTF) contest is a special kind of cybersecurity competition designed to challenge its participants to solve computer security problems and/or capture and defend computer systems. The game consists of a series of challenges where participants
                            must reverse engineer, break, hack, decrypt, or do whatever it takes to solve the challenge. The challenges are all set up with the intent of being hacked, making it an excellent, legal way to get hands-on experience.
                            <h5 class="bold color_white pt-3">
                                About HU CTF
                            </h5>
                            HU CTF is an event of Computer Engineering Team <a href="https://pictinc.org">Hashimate Hackers</a> where students partcipate from all over the world!<br> Out aim is about spreading the importance of cybersecurity in today's
                            community. Each and every person should be aware of different vulnerabilities in systems as well as how to protect onselves agains cyber attacks<br> We believe gamification is the best technique to teach oneself about cybersecurity.
                            <h5 class="bold color_white pt-3">
                                Who can play HU CTF
                            </h5>
                            HU CTF is mainly focused at students who are undergraduates.
                            <div class="row text-center pt-5">
                                <div class="col-xl-12">
                                    <button class="btn btn-outline-danger btn-shadow px-3my-2 ml-0 ml-sm-1 text-left typewriter" onclick="(function(){window.location.href='login2.php'})();">
                                        <h4>LET IT RIP!</h4>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include('templates/footer.php'); ?>

</html>