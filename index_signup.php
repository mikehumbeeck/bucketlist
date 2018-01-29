<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My bucketlist | Sign up</title>
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
<body class="index">
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
<main>
    <!-- sign-up-->
    <div class="container">
        <h2 class="title">Start here <br> to make your favorite list.</h2>
        <div class="inputBox">

            <div class="boxtitles">
                <div class="box-title">Sign Up</div>
                <div class="panel-login"><a href="index.php">Login</a></div>
            </div>

            <form action="php/check_signup.php"
                  method="post" role="form">

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email<sup>*</sup></label>

                    <input type="email" class="form-input" name="email"
                           placeholder="Email Address" required>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name<sup>*</sup></label>

                    <input type="text" class="form-input" name="firstname"
                           placeholder="First Name" required>

                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>

                    <input type="text" class="form-input" name="lastname" placeholder="Last Name">

                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password<sup>*</sup></label>

                    <input type="password" class="form-input" name="password"
                           placeholder="Password" required>

                </div>


                <!-- Button -->
                <div class="boxsubmit">
                    <button type="submit" name="register" class="btn btn-default">Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>



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
