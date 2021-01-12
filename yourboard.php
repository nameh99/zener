<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

        <div class="glitch" >
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
        <div class="glitch__img glitch__img_leaderboard"></div>
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
                        <a href="index2.php" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="profile.php" class="p-3 text-decoration-none text-light bold">Profile</a>
                        <a href="yourboard.php" class="p-3 text-decoration-none text-white bold">Hackerboard</a>
                        <a href="challenges.php" class="p-3 text-decoration-none text-light bold">Challenges</a>
                        <a href="logout.php" class="p-3 text-decoration-none text-light bold">Logout</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-1 bold color_white content__title text-center"><span class="color_danger">HACKER</span>BOARD<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey lead text-spacey text-center hackerFont">
                        “Opportunities don’t happen, you create them.”― Chris Grosser
                    </p>
                    <h2 class="display-3 bold color_white content__title text-center"><span class="color_danger">TEAM </span>GRAPH<span class="vim-caret">&nbsp;</span></h2>
                    <div class="row justify-content-center my-5">
                        <div class="col-xl-10">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5  justify-content-center">
                <div class="col-xl-10">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark hackerFont">
                            <tr>
                                <th>#</th>
                                <th>Team Name</th>
                                <th># Challenges Solved</th>
                                <th>Total Time Taken</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>liveoverflow</td>
                                <td>8</td>
                                <td>42:59</td>
                                <td>2540</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>CR007</td>
                                <td>6</td>
                                <td>44:59</td>
                                <td>1900</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>anonymous</td>
                                <td>4</td>
                                <td>40:00</td>
                                <td>650</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>ashawe</td>
                                <td>5</td>
                                <td>40:10</td>
                                <td>550</td>
                            </tr>
                            <tr>
                                <th class="bold" style="color: #03d3fc" scope="row">5</th>
                                <td class="bold" style="color: #03d3fc">1633060</td>
                                <td class="bold" style="color: #03d3fc">5</td>
                                <td class="bold" style="color: #03d3fc">30:20</td>
                                <td class="bold" style="color: #03d3fc">500</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>pizza</td>
                                <td>3</td>
                                <td>01:20:10</td>
                                <td>480</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        var s1 = {
            label: 'Cryptography',
            borderColor: 'blue',
            steppedLine: true,
            data: [{
                x: '2020-09-06 00:00:00',
                y: 00
            }, {
                x: '2020-09-06 00:07:00',
                y: 50
            }, {
                x: '2020-09-06 00:30:40',
                y: 100
            }, ]
        };

        var s3 = {
            label: 'Steganography',
            borderColor: 'green',
            steppedLine: true,
            data: [{
                x: '2020-09-06 00:00:00',
                y: 00
            }, {
                x: '2020-09-06 00:10:00',
                y: 30
            }, {
                x: '2020-09-06 00:15:00',
                y: 80
            },]
        };

        var s2 = {
            label: 'Reverse Engineering',
            borderColor: 'red',
            steppedLine: true,
            data: [{
                x: '2020-09-06 00:00:00',
                y: 00
            },]
        };

        var s4 = {
            label: 'Web',
            borderColor: 'pink',
            steppedLine: true,
            data: [{
                x: '2020-09-06 00:00:00',
                y: 00
            }, {
                x: '2020-09-06 00:20:00',
                y: 100
            }, {
                x: '2020-09-06 00:37:34',
                y: 150
            }, {
                x: '2020-09-06 01:00:45',
                y: 250
            },]
        };

        var s5 = {
            label: 'Trivia',
            borderColor: 'orange',
            steppedLine: true,
            data: [{
                x: '2020-09-06 00:00:00',
                y: 00
            }, {
                x: '2020-09-06 00:40:00',
                y: 20
            }, {
                x: '2020-09-06 00:55:00',
                y: 70
            },]
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                datasets: [s1, s2, s3, s4, s5]
            },
            options: {
                scales: {
                    yAxes: [{
                        type: 'linear'
                    }],
                    xAxes: [{
                        type: 'time',
                        distribution: 'series', // or linear
                        time: {
                            unit: 'minute',
                            displayFormats: {
                                minute: 'mm:ss'
                            },
                            tooltipFormat: 'mm:ss'
                        }
                    }]
                }
            }
        });
    </script>

<?php include('templates/footer.php'); ?>

</html>