<?php require_once("php/database_functions.php");

if (!isset($_SESSION['auth'])) {
    header('location:' . ROOT_URL);
}
?>


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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form-home.css">
    <link rel="stylesheet" href="css/output-rows.css">

</head>
<body class="home">
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
<header>

</header>
<main>
    <div class="container">
        <h1 class="text-center">Welkom <?php echo $_SESSION['user_name']; ?></h1>
        <br>
        <div class="inputTable">
            <div class="col-md-12">
                <h3 class="inputTitle text-center">Time for a new adventure</h3>
            </div>
            <form action="php/listinput.php" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="theme">Theme</label>
                        <input type="text" class="form-input" name="theme" placeholder="Theme">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-input" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="place">Place</label>
                        <input type="text" class="form-input" name="place" placeholder="Place">
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" name="check" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea class="form-input" name="description" placeholder="Description"> </textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="list">

                    <?php
                    $ds1 = new DataSet($sql = "SELECT * FROM list", $conn, $load = true);
                    foreach ($ds1->rows as $row) {
                        //echo "first_name: " . $row["first_name"]. " - last_name: " . $row["last_name"] . " - email: " . $row["email"] . "<br>"; //output
                        //print_r($row);

                    }
                    ?>
                    <h4 class="text-center"><?php echo "=== " . $row["lis_subject"] . " ===" ?></h4>
                    <p><?php echo $row["lis_place"] . " - " . $row["lis_theme"] ?></p>
                    <p><?php echo $row["lis_description"]; ?></p>

                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>
