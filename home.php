<?php
require_once("php/database_functions.php");
require_once("php/update_list.php");
require_once("php/is_authenticated.php");

if (isset($_GET["list_id_upd"])) {
    //Ophalen van list-items
    $list_item = getlistitem($_GET["list_id_upd"]);
    //List item gebruiken om formulier in te vullen in formulier

}
if (isset($_GET["list_id_del"])) {
    $delitem = deletelistitem($_GET["list_id_del"]);
    header('Location:' . ROOT_URL . 'home.php');

}

if (isset($_GET["list_id_to_check"])) {
    $checkitem = checkItem($_GET["list_id_to_check"]);
    header('Location:' . ROOT_URL . 'home.php');

}

if (isset($_GET["list_id_to_uncheck"])) {
    $uncheckitem = uncheckItem($_GET["list_id_to_uncheck"]);
    header('Location:' . ROOT_URL . 'home.php');
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
    <link rel="stylesheet" href="css/theme-gallery.css">
    <link rel="stylesheet" href="css/hamburger.css">

    <!-- Slick - Carousel -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body class="home">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="js/hamburger.js"></script>
<script src="js/carousel.js"></script>

<header>

</header>
<main>
    <div class="container" id="formhome">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-1 col-lg-1">
                <img class="logo responsive" src="img/logo/logo04Black.png" alt="logo">
            </div>
            <div class="col-xs-5 col-sm-7 col-md-9 col-lg-9">
                <h1 class="welkom">Welkom <?php echo $_SESSION['user_name']; ?></h1>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="dropdown">
                    <button id="nav-icon4" class="" data-toggle="dropdown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="php/logout.php">Log out</a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <hr>

        <div class="inputTable">
            <div class="col-md-12">
                <h3 class="inputTitle text-center">Time for a new adventure</h3>
            </div>
            <form action="php/listinput.php" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="theme">Theme</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="theme">
                            <?php
                            switch ($list_item["theme"]) {
                                case "travel": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Travel</option>
                                    <?php break;
                                case "Food&drinks": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Food-drinks</option>
                                    <?php break;
                                case "Relation": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Relation</option>
                                    <?php break;
                                case "Visiting": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Visiting</option>
                                    <?php break;
                                case "Sport": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Sport</option>
                                    <?php break;
                                case "Random": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Random</option>
                                    <?php break;
                                case "Adventure": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Adventure</option>
                                    <?php break;
                                case "Career": ?>
                                    <option value="<?php echo $list_item["theme"] ?>">Career</option>
                                    <?php break;
                            }
                            ?>
                            <option>Travel</option>
                            <option>Food-drinks</option>
                            <option>Relation</option>
                            <option>Visiting</option>
                            <option>Sport</option>
                            <option>Random</option>
                            <option>Adventure</option>
                            <option>Career</option>
                        </select>
                        <?php if (isset($_GET["list_id_upd"])) { ?>
                            <input type="hidden" name="listid" value="<?php echo $_GET["list_id_upd"] ?>">
                        <?php } ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-input" name="subject" placeholder="Subject"
                               value="<?php echo $list_item["subject"] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="place">Place</label>
                        <input type="text" class="form-input" name="place" placeholder="Place"
                               value="<?php echo $list_item["place"] ?>">
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
                        <textarea class="form-input" name="description"
                                  placeholder="Description"><?php echo $list_item["description"] ?></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container" id="themegallery">
        <hr>
        <!--
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/travelb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Travel</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/fooddrinksb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Food & drinks</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/relationb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Relation</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/visitingb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Visiting</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/sportb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Sport</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/randomb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Random</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/adventureb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Adventure</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a class="info" href="#">
                    <div class="hovereffect">
                        <img class="img-rounded responsive image" src="img/themes/careerb.jpg" alt="Card image cap">
                        <div class="middle">
                            <h2 class="text">Career</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 id="themetitle">&nbsp;<span></span></h4>
            </div>
        </div>

        <section class="regular slider">
            <div class="themawrapper" data-thema="Travel">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/travelb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Food-drinks">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/fooddrinksb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Relation">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/relationb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Visiting">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/visitingb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Sport">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/sportb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Random">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/randomb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Adventure">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/adventureb.jpg" alt="Card image cap">
                </div>

            </div>
            <div class="themawrapper" data-thema="Career">

                <div class="hovereffect">
                    <img class="img-rounded responsive image" src="img/themes/careerb.jpg" alt="Card image cap">
                </div>

            </div>
        </section>


        <div class="row">
            <div class="col-md-12">
                <div class="list">
                    <?php
                    $userid = $_SESSION['user_id'];
                    $ds1 = new DataSet($sql = "SELECT * FROM list WHERE lis_user_id = '$userid'", $conn, $load = true);
                    foreach ($ds1->rows as $row) {
                        $date = date('j F', strtotime($row["lis_date"]));
                        $year = date('Y', strtotime($row["lis_date"]));
                        $rowDone = $row["lis_done"]; ?>
                        <div class="row <?= $row["lis_theme"] ?>">
                            <div class="col-xs-3 col-md-2">
                                <p class="date"><?php echo $date ?></p>
                                <hr style="border-color: #FFF; width: 40%;">
                                <p class="date"><?php echo $year ?></p>
                            </div>
                            <div class="col-xs-9 col-md-8">
                                <?php if ($rowDone == 0) { ?>
                                    <h4><?php echo "=== " . $row["lis_subject"] . " ===" ?></h4>
                                <?php } else { ?>
                                    <h4 class="strikethrough">
                                        <span><?php echo "=== " . $row["lis_subject"] . " ===" ?></span></h4>
                                <?php } ?>
                                <p><?php echo $row["lis_place"] . " - " . $row["lis_theme"] ?></p>
                                <p><?php echo $row["lis_description"] . " " . "(" . $row["lis_id"] . ")"; ?></p>


                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="text-right">
                                    <p>
                                        <a href="<?php echo ROOT_URL ?>home.php?list_id_upd=<?php echo $row["lis_id"] ?>">
                                            <span class="glyphicon glyphicon-wrench"></span></a>
                                    </p>
                                    <p>
                                        <a href="<?php echo ROOT_URL ?>home.php?list_id_del=<?php echo $row["lis_id"] ?>">
                                            <span class="glyphicon glyphicon-remove"></span></a>
                                    </p>

                                    <p>
                                        <a href="<?php echo ROOT_URL ?>home.php?list_id_to_check=<?php echo $row["lis_id"] ?>">
                                            <span class="glyphicon glyphicon-unchecked"></span></a>
                                    </p>
                                    <p>
                                        <a href="<?php echo ROOT_URL ?>home.php?list_id_to_uncheck=<?php echo $row["lis_id"] ?>">
                                            <span class="glyphicon glyphicon-check"></span></a>
                                    </p>


                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
<?php
mysqli_close($conn);
?>
