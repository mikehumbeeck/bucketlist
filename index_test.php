<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-login-signup.css">

</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/bg01.jpg" width="1920px" height="1080px" alt="First Slide">
        </div>
        <div class="item">
            <img src="img/bg02.jpg" width="1920px" height="1080px" alt="Second Slide">
        </div>
        <div class="item">
            <img src="img/bg03.jpg" width="1920px" height="1080px" alt="Third Slide">
        </div>
    </div>

    <!-- sign-up-->
    <div class="container">
        <h2 class="title">Jobs fill your pocket,<br> adventures fill your soul.</h2>

        <div class="inputBox">
            <img class="logo" src="img/logo/logo03Small.png" alt="logo">
            <br><br><br><br>
            <div class="boxtitles">
                <div class="box-title">Welcome</div>
            </div>
            <form action="php/check_login.php" method="post" role="form">
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <input type="text" class="form-input" name="email" value=""
                           placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <input type="password" class="form-input" name="password"
                           placeholder="password">
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember
                            me
                        </label>
                    </div>
                </div>


                <!-- Button -->

                <div class="boxsubmit">
                    <button type="submit" name="login" class="btn btn-default">Login</button>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%; color: #FFF">
                            Don't have an account!
                            <a href="index_signup.php">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Carousel controls -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>

</div>

<?php
echo $_POST["firstname"];
echo $_POST["lastname"];
echo $_POST["email"];

?>


<script type="text/javascript">
    $(document).ready(function () {
        $(".start-slide").click(function () {
            $("#myCarousel").carousel('cycle');
        });
        $("#myCarousel").carousel({
            interval: 3000
        });
    });
</script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>